
<?php

// Membuat koneksi database
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menghapus mahasiswa dengan LastName Prabowo
$query = mysqli_query($con, "
    DELETE FROM tbl_mhs
    WHERE LastName = 'Prabowo'
");

if ($query) {
    echo "Data mahasiswa berhasil dihapus!";
} else {
    echo "Gagal menghapus data: " . mysqli_error($con);
}

// Menutup koneksi
mysqli_close($con);

?>
