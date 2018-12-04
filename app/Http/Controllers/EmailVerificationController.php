<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Cache;
use App\Notifications\EmailVerificationNotification;
use Mail;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    //验证邮箱激活
    public function verify(Request $request){
        //获取参数
        $email=$request->input('email');
        $token=$request->input('token');
        //参数判断
        if(!$email || !$token){
            throw new Exception('验证链接不正确');
        }

        //从缓存中取数据，与获取的‘token’值对比 是否一致

        if($token != Cache::get('email_verification_'.$email)){
            throw new Exception('验证链接不正确或已过期');
        }

        // 根据邮箱从数据库中获取对应的用户
        // 通常来说能通过 token 校验的情况下不可能出现用户不存在
        // 但是为了代码的健壮性我们还是需要做这个判断

        if(!$user= User::where('email',$email)->first()){
            throw new Exception('用户不存在');
        }

        // 将指定的 key 从缓存中删除，由于已经完成了验证，这个缓存就没有必要继续保留。

        Cache::forget('email_verification_'.$email);

        //更改数据库
        $user->update(['email_verified'=>true]);

        return view('pages.success',['msg'=>'验证成功']);
    }

    //发送邮箱
    public function send(Request $request){
        $user=$request->user();
        //判断用户是否已验证
        if($user->email_verified){
            throw new Exception('用户已验证');
        }

        //调用notify() 方法来发送定义好的通知类
        $user->notify(new EmailVerificationNotification());

        return view('pages.success',['msg'=>'邮件发送成功']);

    }


}
