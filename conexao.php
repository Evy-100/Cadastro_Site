<?php
//conexão com o banco de dados
$dsn = "pgsql:host=localhost;port=5432;dbname=exemplo";

$dbusername ="postgres";
$dbpassword ="12345";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}