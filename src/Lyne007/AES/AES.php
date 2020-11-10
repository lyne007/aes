<?php

namespace Lyne007\AES;

class AES
{
    public function encrypt($input, $key)
    {
        $data = openssl_encrypt($input, 'AES-128-ECB', $key, OPENSSL_RAW_DATA);
        $encrypted = base64_encode($data);
        return $encrypted;
    }

    public function decrypt($sStr, $sKey)
    {
        $decrypted = openssl_decrypt(base64_decode($sStr), 'AES-128-ECB', $sKey, OPENSSL_RAW_DATA);
        return $decrypted;
    }
}
