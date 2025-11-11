<?php
$host = getenv('DB_HOST') ?: 'db';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASSWORD') ?: 'root';
$db   = getenv('DB_NAME') ?: 'testdb';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "¡Hola Mundo desde PHP! ✅ Conexión exitosa a MySQL.";
} catch (PDOException $e) {
    echo "❌ Error conectando a la base de datos: " . $e->getMessage();
}
