<?php
// Koneksi ke database
$host = 'localhost'; // Ganti dengan host jika diperlukan
$user = 'root'; // Ganti dengan username database
$password = ''; // Ganti dengan password database
$dbname = 'nama_database'; // Ganti dengan nama database

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $inputPassword = $_POST['pswd'];

    // Ambil hash password dari database
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashedPassword);
    $stmt->fetch();

    // Verifikasi password
    if ($stmt->num_rows > 0 && password_verify($inputPassword, $hashedPassword)) {
        echo "Login berhasil!";
        // Lakukan aksi setelah login berhasil (redirect, sesi, dll)
    } else {
        echo "Username atau password salah.";
    }

    $stmt->close();
}

$conn->close();
?>
