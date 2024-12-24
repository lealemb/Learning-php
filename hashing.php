<?php

$password = "leo123";
$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify("leo123", $hash)) {
    echo "you are logged in ";
} else {
    echo "Incorrect password";
}
