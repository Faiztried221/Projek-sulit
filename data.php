<?php
require_once 'config.php';
session_start();
//create
if (isset($_POST['create'])) {
    $nama_kapal = $_POST['nama_kapal'];
    $nahkoda = $_POST['nahkoda'];
    $gross_tonage = $_POST['gross_tonage'];
    $kebangsaan = $_POST['kebangsaan'];

    $sql = "INSERT INTO 'Tugas' (nama_kapal, nahkoda, gross_tonage, kebangsaan) VALUES (:nama_kapal, :nahkoda, :gross_tonage, :kebangsaan)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nama_kapal' => $nama_kapal, 'nahkoda' => $nahkoda, 'gross_tonage' => $gross_tonage, 'kebangsaan' => $kebangsaan]);

    $_SESSION['message'] = "Data telah ditambahkan";
    header("Location: indeks.php");
    exit();
}
   
// Read
function readAll($pdo)
{
    $sql = "SELECT * FROM Tugas";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

