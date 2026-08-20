<?php
function connexionBdd() : PDO
{
    static $pdo = null;

    if ($pdo === null)
    {
        $dsn = "mysql:host=db;dbname=JSandbox_db;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $pdo = new PDO($dsn, "user", "password", $options);
    }

    return $pdo;
}