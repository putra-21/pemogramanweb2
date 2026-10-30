
<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "pendaftaran_mahasiswa"
);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>
