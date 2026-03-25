<?php
// En XAMPP, __DIR__ apuntará a C:\xampp\htdocs\sistema-abarrotes
$ruta = __DIR__ . '/abarrotes.db';

try {
    $pdo = new PDO("sqlite:" . $ruta);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
