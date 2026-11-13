
<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (isset($_SESSION['login'])) {

    // Menghapus session
    session_unset();
    session_destroy();

    echo "<h1>Anda berhasil Logout!</h1>";

    echo "<a href='session1.php'>Login Kembali</a>";

} else {

    echo "Anda belum login.";

}
?>