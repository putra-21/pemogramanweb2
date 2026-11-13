
<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (isset($_SESSION['login'])) {

    echo "<h1>Selamat Datang, "
    . $_SESSION['login'] . "</h1>";

    echo "<h2>Anda berhasil masuk ke halaman ini.</h2>";

    echo "<a href='session3.php'>Logout</a>";

} else {

    die("Anda belum login!
    Silakan <a href='session1.php'>login di sini</a>");

}
?>