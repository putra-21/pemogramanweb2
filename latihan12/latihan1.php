
<?php

// Membuat koneksi database
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengubah umur Karina Suwandi menjadi 36
$query = mysqli_query($con, "
    UPDATE tbl_mhs
    SET Age = 36
    WHERE FirstName = 'Karina'
    AND LastName = 'Suwandi'
");

if ($query) {
    echo "Data mahasiswa berhasil diupdate!";
} else {
    echo "Gagal mengupdate data: " . mysqli_error($con);
}

// Menutup koneksi
mysqli_close($con);

?>
