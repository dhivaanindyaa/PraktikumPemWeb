<?php
session_start();
if (!isset($_SESSION["data"])) {
    echo "Tidak ada data pendaftaran.";
    exit;
}

$data = $_SESSION["data"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ringkasan Pendaftaran</title>
    <style>
        body {
            background:rgb(191, 234, 231);
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Ringkasan Pendaftaran</h2>
    <p><strong>Nama:</strong><br> <?= htmlspecialchars($data["nama"]) ?></p>
    <p><strong>Email:</strong><br> <?= htmlspecialchars($data["email"]) ?></p>
    <p><strong>Password:</strong><br> <?= htmlspecialchars($data["password"]) ?></p>
    <p><strong>Tanggal Lahir:</strong><br> <?= htmlspecialchars($data["tgl_lahir"]) ?></p>
</body>
</html>
