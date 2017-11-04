<?php
$salt = '908DC60A';
$password = 'secret';
$hash = base64_encode(hex2bin($salt . hash('sha256', hex2bin($salt . bin2hex($password)))));
