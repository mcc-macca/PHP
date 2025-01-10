<?php

$token = bin2hex(random_bytes(16));

setcookie("token", "+?=lgvdviu%&%$%94998ugrrg3)($)£)(/&%", [
    'expires' => time() + 86400
]);

$token_cookie = $_COOKIE['token'];

echo $token_cookie;