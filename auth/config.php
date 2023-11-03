<?php
session_start();

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Sambungkan ke database
define('DB_HOST', 'sql12.freesqldatabase.com'); // Ganti dengan host database Anda
define('DB_USER', 'sql12658879'); // Ganti dengan username database Anda
define('DB_PASS', 'cQmEsVp2rJ'); // Ganti dengan kata sandi database Anda
define('DB_NAME', 'sql12658879'); // Ganti dengan nama database Anda

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validasi pengguna dengan SQL
    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    // var_dump($result->num_rows);
    // die();
    if ($result->num_rows > 0) {
        // Jika login berhasil, Anda bisa mengarahkan pengguna ke halaman lain
        header("Location: ../dashboard.php");
        exit();
    } else {
         echo "<script>alert('Username / Password salah. Coba lagi.');</script>";
         echo "<script>window.location = '../index.html';</script>"; 
    }
}
$conn->close();
?>





