<?php

require "./vendor/autoload.php";

$aes = new \Lyne007\AES\AES;
$encrypted = $aes->encrypt('Very sensitive data', '123123');
echo $encrypted;

$decrypted = $aes->decrypt('U2FsdGVkX19FFkUtgexTiWS1R2GOhm0Qc763zMw+XhaUftJzPFQ6GVhsmuem+8Pa', '123123');
echo $decrypted;