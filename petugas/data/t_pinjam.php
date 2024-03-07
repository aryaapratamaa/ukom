<?php


include '../koneksi.php';
 
$IDuser     = $_POST['userID'];
$IDbuku     = $_POST['bukuID'];
$tgl_peminjaman     = $_POST['tgl_peminjaman'];
$tgl_pengembalian   = $_POST['tgl_pengembalian'];
$nama       = $_POST['nama'];
$status_peminjaman  = $_POST['status_peminjaman'];


mysqli_query($koneksi,"INSERT into peminjaman (IDuser,IDbuku,tgl_peminjaman,tgl_pengembalian,nama,status_peminjaman)
                                        values('$userID','$bukuID','$tgl_peminjaman','$tgl_pengembalian','$nama','$status_peminjaman')");
 
// mengalihkan halaman kembali ke index.php
header("location:../peminjam.php");
 



?>