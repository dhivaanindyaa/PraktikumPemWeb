<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $tgl_lahir = $_POST["tgl_lahir"];

    // Validasi server-side
    if (empty($nama) || empty($email) || empty($password) || empty($tgl_lahir)) {
        echo "Semua field harus diisi.";
        exit;
    }

    // Simpan ke file txt
    $data = "Nama: $nama | Email: $email | Password: $password | Tanggal Lahir: $tgl_lahir\n";
    file_put_contents("data_pendaftar.txt", $data, FILE_APPEND);

    // Simpan juga ke session untuk ringkasan
    session_start();
    $_SESSION["data"] = [
        "nama" => $nama,
        "email" => $email,
        "password" => $password,     
        "tgl_lahir" => $tgl_lahir
    ];

    header("Location: ringkasan.php");
    exit;
}
?>
