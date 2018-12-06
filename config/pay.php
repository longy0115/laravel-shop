<?php

return [
    'alipay' => [
        'app_id'         => '2016092400584881',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmRmPOsJ756LHhqiwUA5zEpPxU4Okt5E4cORpFuJU6TyiwRY2BD7TYJoKkrlYWDf4AHkr3orhQlrg1XJz8P4ghwE134bd8Gu1xjnrRic3F5vnmSAyuBm96bj9RezMuMxyYVLEwxX3YLyi8C7YdRygKDwIsop0V2ugwH9eGLA5w5d5Zmgy13Frhx5tJx1uLO3rqd/++tQKL9YMlI4sPKvhlFHv/gN9X7bDlYuxd1V5uvEgwbzBPF7h0+i1VMW6tzXvEpSBe86CGXSlnJykZHJsK/cfz9iJ0trUxux3iC0vzX9ErqGY7hsuPXijkmCnY4L4iDHa7saP6kqseztiqWB/3wIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEA1bnn5Yp/kgkWtQYsSAXup2dTeOgFVS9dXaUgwigHBfMBNB3q4zEAY3stLc0X+uInQ28iN6PH2pbpr77PjbPqvEVtpQv4B+LGORtiHL2X4ZLMGRa4x7KaCrVDPQSkdtFpNuMJWPe+zsjcEno8r2smS6bmdjwGJVdOKe42CUHYBWjgNYuyPFwNqg8c3WmzzwcCvZkCpAhV16xnqY7NNo+nW5L+QBLp201r73OfbAG9zgC/BMRp5NlOHzheVU3EzqW+Y3or2iHajlagD8WOof+5kZmVgPCE9W4PNbtOtZcHR2vS/5WLOq217p1FcHhtIwYgX9WPmSCdIDYJeOQV0erGAwIDAQABAoIBAQCiY515//CMAhHZu3X7x14cndqDfC9JGTLkiynHu+gSMiAQ/EZTFxFHhPi/2xxESH8ysocaJXwdbxrhqKZE8ZYCNPJpPB3ZyAl6rH6wfbGf+AzRZz1Apkh6qF0NSLC5gsVhqcGZcqvsrBrigzQGyPAQ/SAQZ+z3hE1keJVgFUJQYIn/lxQxtqfM/sUwfB7docYVwRszc3zLCDCeTnS51Tsi3khpj13D4XeRnV9NEsithSL5dW0gAtsqZb2h+1QEmB+YAX0wH726OJ+WxyIO+S0jbMGVjUC/vv1f86Rl0KGfYecsIyYv+Cklkk1BMH2m2HYUqiD98YeNq/cpEuUWOiHZAoGBAPmNKXZTvHprPztQENOJYaWzYbFtDJMMZAJ0PObTuWysNbsAFO5swtLpk47Ft6+vkgZY4oB60plT1uE37IWlkGW7kZWHiBFkZ1+1vuqzxTiYYH2EO5LJx0voKTLY/UIc42DuzlcnagxMYP9p82p2AV/+Dpkl3lh1PEwT5gMNPQufAoGBANs/wIm1rmD7mtw0QC0wYmG8c35pits/XQCpYnBJ9Ei9frbZEaEzECUtuVu48iDpwLljWu9VncANV2GXQnZCAF/4klbngIyLqNcTY5JCmPnGhwMHz/iYzEBDKkR9Q6zpFEexS99W4hRIGYlCCgVwpXOioX27cSrw3aesWbEPu2sdAoGBAMmlQweWCgpxdpqay73imMCn/hy8HRkFPhqtijiKhJ5HWPNN0ZwGzjZW/yCyqwaPO9NdJ0jh9iJnGI7L/ZbQfal2suC8rzo+gzlXRnmn4Yklt3I00159JUk0w3WO2LX/WcwNqzXJZ2ugnBBGsKYpzFqgk3M0okGgGaTvv0BgBh/JAoGAaDoHWq/OxPX3KWWBeLn+mv3OXbLous+Fc9ISJNVTVt0Whu/sLJisvS/eZRcnq7PT1Y3A5fPqeSkeeBtDEhrQOM9fKgcFmkquKghill4ogNz6w9sL598jgg0r48E00dc/t9E2A2c3NHMOCK0nPGzPiogugyn/Y217wcDyJnUXIJUCgYBiDwwgj3yZ01dHa3rqxFLI1/3w+yr5q89yoaw27cao3oair1M3ZGWYG/BmfauVExIGZQx1P8YEGieO2PKFYsBNjrsbDONMk4nOqWWDQPSN05HB9tQBNhRMjyhU35SVjyNRbLCi/YOeVPtUje7qwOJD5cXPCZp9AxZv4VAd92JDkA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];