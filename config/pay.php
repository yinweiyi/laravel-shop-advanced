<?php

return [
    'alipay' => [
        'app_id'         => '2016091800543092',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsV9G0BgESLpTWR6OjjWH5//eWv6SKHMCb1SK3DC6saZEKcS8FaVXtV+9QDY6POZyzlzj3Zv5ZUlj2cv+NQm7gZcxE5a2tuPJoMBg3NM0DcWjM4fnY3UHTEyBWy1Mgo2HeG5J3suDg3iSKSL/El7UdfgY6q78ze1oHNFfzLDebowilrzLSc2imgJ1js3Bd5CupYYwWDdIeIpsc+Klx5/IgwjuoNPKywE4fFisj0kTOyyuNstIy1chiHzzpY37WQjfa7jaO9O+0vw4s3zI3uhF8JQwOKzKiP64+xOJEyqyZ0g5JdF3mf4m4OM+kzeowFhUpzLcQ93W/KOZFQb1Dy132QIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEA3IqTqkdeX2Rn1ovThm9OhgUjIWEelmvBUgsKR5aViEcKr+suSblo9XA8a6xiEkpC+68a55u0o4Pu7aOWqpInZ6KY/VEetYSf/Z8Nggsu4+9HKC9hIvDBE04mzrRaS3iX+BBEaGR2b67q/985uipch6YO5iRlnEf6HshCnacsgJQAbSFmoZNmjSbaxdcw1/YpJSt2IjR+W5YNzfT551wQjeES2ACQCJG2vg6gDzgAyIStqksc3shRYcgzzDOTwUaph9kMBoFYXV+nY05Zm8A4dkJ+L5EMIvzYpB24ZYVBAzjrwfsnHlbWl+NTq5huJKoWpgExzRBB7hJCUSFR5YKQSQIDAQABAoIBADOYJ9uaPrXKY5CJvb6ho5ku8n0In4NJSjzLYGhHDkyHcjSdrIKK4ccprrjx5y+oN+txl7W/c48denQV5VWaQ6W3IFuC8tA8asGGyD44J4wjml4IV405DbJagjGxd75YRBVAmQBjIGIYZdneez7WUjdZ3fpxYWQiYp149Dy1s2+QwSqSzDDkfMqItN7qNTGdxg+LFP2OFbYts+J0q7sPY9flLXMwvkrQqDYkrepGpVUOlCCvlO38uuX82WgGKMt/odmsmSzbl3UU6S+G0NbB8RvWqeaATz/FEFb6/5/87Iyfb2fOeUHvXlJixXazgbrrJTFJ2MkAKZawCToFznGbeAECgYEA75LVQIVsb5IVHL/0qmz4Gov5aCxw5i3eHqUUqssN/CJgUT3Hv/x2YP22S80t/0VCNZokt6lVJn09+NBcGfJA25OkN6ftQzbcToghiZZuNKUQMoa7yJSXj3KFra0da1cBmrnKRCekom45cpq1kYOsqoY2mWt57CH2WLLiwD+WNcECgYEA66mtFFlz4H1IHjRijoCVEi7ZatohCy8QZPjHfnfR3yJ8dZdQOwy5tODKEZ7dmSCdWSb/GMbSDyFSVq+1zP/WfuviO0QeD+4BAUoLNj9hPrHgYkgFDh/J7ymGCEQeKHbrT5NHpMbdenYvUy7Kiyxc3HR+wXmumldnDQxlCAHKzIkCgYEAvnNIygEHQe6sj+1dT/pOhbQOsizaF3IRKOVs95VyaaTeUtc9KzdE2Df5KmtTDKJ/TuNaGxMnGPDpShpBjXLS8nt9Sa1aZVuAaYG4v4rx0zIBHVmUgJD3p1aQRI/hWkqRgPH/hIzLSUE8tAmfG63Ens8RKoeRJhGdp8eVkOU7wUECgYEAmyME7JuCm+r9edzUcKkW+XRb7mqQTDN8YGwhsBCi2XhzZFnrGCRlcDx26aiiiracvt7cGexwxkMSWDyturlE9CLGuGs8OxJcGQQsY1bP5pzkcO6mXUjx/35fXLuy+sJmX+k9xaygioiY2PK5pWrb6sjJ1QYMulAFZ+Kb8+xyG7kCgYEA0OHsKS17lRBVFBLlnI2NGbtmfvFzKZ1MimtdXI4mFnl0LtWbNvTBosMkfksq3+zOyRCKsZ650qZPCjRvwyr6Pnw6XxeFQjumK/RvPMCbBlH7DvpDUYi94y/lj8hA2VugkoB7b1NXl2J/GiEm/0Jp1pzlGgh7QN2I+oXEGDT4q4c=',
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
