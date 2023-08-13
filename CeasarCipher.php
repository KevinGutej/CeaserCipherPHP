<?php

function caesarCipherEncrypting($message, $shift) {
    $encryptedMessage = '';

    for ($i = 0; $i < strlen($message); $i++) {
        $char = $message[$i];
        if (ctype_upper($char)) {
            $encryptedChar = chr(((ord($char) - 65 + $shift) % 26) + 65);
        }
        elseif (ctype_lower($char)) {
            $encryptedChar = chr(((ord($char) - 97 + $shift) % 26) + 97);
        }
        else {
            $encryptedChar = $char;
        }

        $encryptedMessage .= $encryptedChar;
    }

    return $encryptedMessage;
}


$InputMessage = "Kevin is the best?!";
$shiftNumber = 2;


$encryptedMessage = caesarCipherEncrypting($inputText, $shiftValue);

echo "Original Text: $InputMessage <br>";
echo "Encrypted Text: $encryptedMessage";
?>