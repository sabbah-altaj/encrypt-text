<?php

// START TITLE
echo str_repeat("\e[0;36m=\e[0m", 40) . "\n";
echo str_repeat("\e[0;36m=\e[0m", 13);
echo " \e[0;36mSabbah Eltaj\e[0m ";
echo str_repeat("\e[0;36m=\e[0m", 13);
echo "\n" . str_repeat("\e[0;36m=\e[0m", 40) . "\n";
// END TITLE

// REQUEST A TEXT MESSAGE
echo "\nPlease insert your text below:\n";

// GET TEXT FROM USER
$handle = fopen("php://stdin", "r");
$requestedText = fgets($handle);
// CONFIGURATIONS
$chipher = "AES-128-CTR";


// REQUEST VALUE FROM USER
$ivLength = openssl_cipher_iv_length($chipher);
$ivEncryp = "1234567891011121";
$encrpKey = "sabbah";

// Encryption
$encryption = openssl_encrypt($requestedText, $chipher, $encrpKey, 0, $ivEncryp);
echo "\n🔐 The encrypted text\n";
echo $encryption . "\n";


$ivDecryp = "1234567891011121";
$decrypKey = "sabbah";

// Decryption
$decryption = openssl_decrypt($encryption, $chipher, $decrypKey, 0, $ivDecryp);

echo "\n🔓 The decrypted text\n";
echo $decryption . "\n\n";
echo "✅ See you soon...\n\n";
exit(3);