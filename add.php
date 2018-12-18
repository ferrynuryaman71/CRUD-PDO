<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
	<div class="container">
	<h1 align="center">Tambah Data</h1>
	<form action="insert.php" method="post">
		<label for="1"> Nama :</label>
		<input class="form-control shadow" type="text" name="nama" id="1" placeholder="Masukan Nama">  
		<br><br>
		<label for="2">Email :</label>
		<input class="form-control shadow" type="email" name="email" id="2" placeholder="Masukan Email">
		<br><br>
		<label for="3">No.HP :</label>
		<input class="form-control shadow" type="number" name="no_hp" id="3" placeholder="Masukan Nomor">
		<br><br>
		<label for="4">Divisi :</label>
		<input class="form-control shadow" type="text" name="divisi" id="4" placeholder="masukan Divisi">
		<br><br>
		<button type="submit" class="btn btn-primary" name="Submit">Tambah</button>
	</form>
	</div>
	</form>
</html>