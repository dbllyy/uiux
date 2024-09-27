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

// Proses registrasi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['pswd'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Simpan pengguna baru ke database
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashedPassword);
    
    if ($stmt->execute()) {
        echo "Registrasi berhasil!";
    } else {
        echo "Registrasi gagal: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
