<?php
session_start();

// Hapus semua data sesi
session_destroy();

// Redirect pengguna kembali ke halaman login atau halaman lain yang sesuai
header("Location: index.html"); // Ubah "login.php" sesuai dengan halaman yang sesuai
exit();
?>