<?php

$conf = [
    'host' => 'localhost',
    'dbname' => 'test',
    'user' => 'root',
    'password' => ''
];


try {
    $pdo = new PDO("mysql:host=" . $conf['host'] . ";dbname=" . $conf['dbname'], $conf['user'], $conf['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERRORE! '. $e->getMessage();
}