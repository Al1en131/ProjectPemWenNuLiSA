<?php
// include database connection file
include_once("config.php");


$nama = $_GET['nama'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM komen WHERE nama=$nama");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:komentar2.php?");
?>