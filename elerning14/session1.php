
<?php
session_start();

if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Memeriksa username dan password
    if ($user == "rahadian" && $pass == "123") {

        // Membuat session
        $_SESSION['login'] = $user;

        echo "<h1>Login Berhasil!</h1>";
        echo "<a href='session2.php'>Masuk ke Halaman Berikutnya</a>";

    } else {
        echo "Username atau Password salah!";
    }
} else {
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>

    <h2>Login Pengguna</h2>

    <form method="post" action="">
        Username:
        <input type="text" name="user" required>
        <br><br>

        Password:
        <input type="password" name="pass" required>
        <br><br>

        <input type="submit" name="Login" value="Login">
    </form>

</body>
</html>

<?php
}
?>