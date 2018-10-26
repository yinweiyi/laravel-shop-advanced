<?php

return [
    'alipay' => [
        'app_id'         => '2016091800543092',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzSvpCJfgTbY5GFEVWZqrTJpwXFVQv5+vPrCGJCgqOcY1YZ3+y8VPl9XaEgMAKAbYjaqABTG4Pr8stPAB3KBU8mHHHAds1hLI/YxgpEHvT/G6AKOizL2WQO7ysFEHcnvB3lDrIjVSQyVRPazEf366OaSi5lc3hwgytgqMxTUayexLm4PHWpJ3RDbJk2jKq/LlunJ0JmKv3AQOGftoS0rtIGLHE2fUvhtxCBlCK3MZzoYVcrGOwAR1oA4cQ/ZMQRzzX4MJFKNr1+VDK10JQ2HqgKq9h7Gpn6QlYjTISDnfBR4KKWmAhGC29ck1d32LZi67UVmbINyu/yeyb7aj4YR7OQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAwtsqwIVDzBZxOQCglGunr+fjjBgItbnA4+xrI7kItoY632tnQedGXS9pAxIrkunv28M835uvI3QqlbVQafLEJKQjxS/dd0yPdxiOmGrneUWM1mEMk0QWf14NHnd7vy8BLkJixTEKaUSDesQaGo4A6UfSlNs9qsUBKA1/o49fxbrgNqvZm0blJj8hSQCV/kccaagJBeMTZi4N+MvOwZmAWBHMh1mH9oZSYi4Dt8vqXFrXGZM3Pdi7D892W6k1HQEUbaNz/bgjhZgqpQQYT6ieFiPFn2SOkTUZuL1Wj1WQ9hFiA5hV1uWWqU4OefpaSZOXwbszQgqPCKu+aR11grTzbQIDAQABAoIBADk7SD5NphEekljMv114lUMMWABA2uYNTgNj4EAYy99YY5hVonlv5XHfR/e38YZwIZwppwqCXpmKOCvKmnjT7hpY/4yeN20f1o+DbfaEh8JN1ETvMlNaz0TPqgjFzVnlA3LD2uDSO52ZmwiG6qfcB5Z9GvPPxTgQLvvFozS2GsonSvPHuvgwDusfk7hLDwo/5kefvIrSAotNA8Ll/Zb1ZQkXvQKW6Y5aPzsmYMv/OuvPs/wPr+fG/R8Fg6QW4LxGAXCM3IrnPXKPAc1v4+i2yPR4IXfjigvj/DLY38PUC9vrDDoZEPqcUqryAcymkX2+As+Hbt+r17yP2/uuZf9o+V0CgYEA6k5D/VYTc2CvFzDzLAwGgS8xYsRJ5wLUZPOdIo46boNj/C8N9hzIX8gwjpI/G4uJhrPYZEDxCzLPK0tCrhKky9gD3bty8OvKbz/y1cBO+YqW+hi3+XYd32Go+uFoSl9Z09ZA4eYBAjpVng8hkwhjIDulmTuYbIe2pC6Nf2uivyMCgYEA1OXUcKOxWS3BvcilCSma8Szl21OjZVGTJxYaOZm5RCYxpjwTLamnbI06VGKiP2GWJdRD8PwzmetNhvusUzXyL07oEUE4+InPzUo07KNKPxgOkkI1coWNTHguRT9OFg9KYPUN/9QK4NyMaVwlZO2YkTKdOTevGAFQs5BFmGlodC8CgYBuWsx0/lyM5AWzY4+0uDk8EREulorELjYBEih5RQnKUUH/Xd4yg53wVuZf0Au/Gnp8oioSFfAxuQ2QM5NFT2ykwaoYfhgF1thyi2kBOeE4cQjo5EmKShKJyoJ/HzkyhjRVrLzEaMMi3HzExBWpHbMqVE2LnWEOBOGF9JMaZ4SwhwKBgEchIoEfr7kj2H8X8kvFYscBQSquHwFS598/OzPTcFqciCoKGD5BWHakGMDo01xptkidSrXRDUx3mUdn/oMumuPDcTWSnP4szQjBqj0FsWCzIOssw76ncDYEUTFBnU0xfqA2P58hsSC/jwoEh1nZKAga6Pyc5hsXFWdo5Fevn/5xAoGAK6T4FAhqv+P6FzQvvNkDUCBj77C78vakd4ZjrL4rGUZFX4ieWv7LrFTIXNU06ZyQQGsxAY4AKWSdiItGRyr+V6WM+a/Avdblx6E/bh0MXDmMbX0ML46ECWUM0QkbyzVg9VUm+HIuVuJoYqcdU0VOO6wCANU4dPOK+yJHeOYz5Bw=',
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
