<?php 
include '../koneksi.php';

$id = $_GET['bukuID'];

mysqli_query($koneksi, "DELETE FROM buku WHERE bukuID='$id'")or die(mysql_error());
 
header("location:../buku.php");
?>