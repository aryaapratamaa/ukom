<?php
	include '../koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$nis = $_POST['nis'];
	$namalengkap = $_POST['namalengkap'];
	$alamat = $_POST['alamat'];
	$level = $_POST['level'];

	mysqli_query($koneksi,"INSERT into user(username,password,email,nis,namalengkap,alamat,level)
		values('$username','$password','$email','$nis','$namalengkap','$alamat','$level')");

	header("location:../index.php");

?>