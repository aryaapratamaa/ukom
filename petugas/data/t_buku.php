<?php

include '../koneksi.php';
 
$judul       = $_POST['judul'];
$penulis     = $_POST['penulis'];
$penerbit    = $_POST['penerbit'];
$tahunterbit = $_POST['tahunterbit'];

move_uploaded_file($file, '' .$Foto);
move_uploaded_file($file_tmp, '' .$Buku);
mysqli_query($koneksi,"INSERT into buku 
                        values('', '$judul','$penulis','$penerbit','$tahunterbit',') ");
 
header("location:../buku.php");
 
?>