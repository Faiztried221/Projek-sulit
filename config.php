<?php
$host = 'localhost';
$dbname = 'testing';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql :host=$host;dbnam=$dbname", $username, $password);
    $pdo ->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "koneksi berhasil";
}catch (PDOException $e) {
    die ("koneksi gagal;" . $e->getMessage());
}