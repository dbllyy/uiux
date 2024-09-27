<?php
// Mengatur password yang ingin di-hash
$password = "password_anda"; // Ganti dengan password yang ingin di-hash

// Meng-hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Simulasi penyimpanan di database
$storedHash = $hashedPassword; // Simpan $hashedPassword ke database

// Menampilkan hash password
echo "Hash dari password: " . $hashedPassword . "<br>";

// Password yang dimasukkan oleh pengguna
$inputPassword = "password_anda"; // Ganti dengan password yang di-input oleh pengguna

// Memverifikasi password
if (password_verify($inputPassword, $storedHash)) {
    echo "Password valid!";
} else {
    echo "Password salah.";
}
?>
