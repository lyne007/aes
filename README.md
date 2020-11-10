# aes 加密/解密
## Requirements
 - PHP 5.6 or later
 - OpenSSL extension for PHP

## Encrypting data
    $aes = new \Lyne007\AES\AES;
    $encrypted = $aes->encrypt('Very sensitive data', 'password');
## Dncrypting data
    $aes = new \Lyne007\AES\AES;
    $decrypted = $aes->decrypt('U2FsdGVkX19FFkUtgexTiWS1R2GOhm0Qc763zMw+XhaUftJzPFQ6GVhsmuem+8Pa, 'password');
     
