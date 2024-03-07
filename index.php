<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman login</title>
	<link rel="stylesheet" href="Bootstrap/css/boostrap.min.css"> 
</head>
<body>
	<fieldset style="margin-top: 2rem;">
		<h1>Silahkan Isi Data Berikut!</h1>
	<form action="aksi/cek_login.php" method="POST">
		<div> 
		<label for="exampleinputemail" class="form-label">Username : </label>
		<input type="text" name="username" placeholder="">
		</div>
			<div> 
		<label for="exampleinputemail" class="form-label">Password : </label>
		<input type="password" name="password" placeholder="">
		</div>
		<button type="submit">Login</button>
		<p>Apakah Sudah Punya akun, Buat <a href="register.php">Disini</a></p>
		</form>
	</fieldset>
</body>
</html>
