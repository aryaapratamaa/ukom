<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="Bootstrap/css/boostrap.min.css">
	<title>Halaman Login</title>
</head>
<body>
	<fieldset style="margin-top: 2rem;">
		<h1>Silahkan Isi Data Berikut!</h1>
	<form action="aksi/proses_daftar.php" method="POST">
		<div> 
		<label for="exampleinputemail" class="form-label">Username</label>
		<input type="text" name="username" placeholder="">
		</div>
		<div> 
		<label for="exampleinputemail" class="form-label">Password</label>
		<input type="password" name="password" placeholder="">
		</div>
		<div> 
		<label for="exampleinputemail" class="form-label">Email</label>
		<input type="text" name="email" placeholder="">
		</div>
		<div> 
		<label for="exampleinputemail" class="form-label">Nis</label>
		<input type="text" name="nis" placeholder="">
		</div>
		<div> 
		<label for="exampleinputemail" class="form-label">Nama Lengkap</label>
		<input type="text" name="namalengkap" placeholder="">
		</div>
		<div> 
		<label for="exampleinputemail" class="form-label">Alamat</label>
		<input type="text" name="alamat" placeholder="">
		</div>
		<span class="level-txt">Select Level :</span>
				<select name="level">
					<option value="admin">admin</option>
					<option value="peminjam">peminjam</option>
				</select>
		<button type="submit">Register</button>
		<p>Apakah Sudah Punya akun, Buat <a href="index.php">Disini</a></p>
		</form>
	</fieldset>
</body>
</link>
</html>
