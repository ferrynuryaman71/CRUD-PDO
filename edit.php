<?php 
include_once 'koneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id=:id";

$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));

	while($row=$query->fetch(PDO::FETCH_ASSOC)) {

		$nama = $row['nama'];
		$email = $row['email'];
		$no_hp = $row['no_hp'];
		$divisi = $row['divisi'];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Belajar membuat form </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	 
</head> 
<body>
	<div class="container">
	<h1 align="center">PEDAFTARAN</h1>
	<form action="update.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['id']; ?>">
		<label for="1"> Nama :</label>
		<input class="form-control shadow" type="text" name="nama" id="1" placeholder="Masukan Nama" value="<?= $nama; ?>">  
		<br><br>
		<label for="2">Email :</label>
		<input class="form-control shadow" type="email" name="email" id="2" value="<?= $email; ?>" required placeholder="Masukan Email" oninvalid="this.setCustomValidity('harap masukan email')"
    	oninput="this.setCustomValidity('')" >
		<br><br>
		<label for="3">No.HP :</label>
		<input class="form-control shadow" type="number" name="no_hp" id="3" placeholder="Masukan Nomor" value="<?= $no_hp; ?>" required>
		<br><br>
		<label for="4">Divisi :</label>
		<input class="form-control shadow" type="text" name="divisi" id="4" placeholder="masukan Divisi" value="<?= $divisi; ?>">
		<br><br>
		<button type="submit" class="btn btn-primary" name="update">Perbaharui</button>
	</form>
	</div>

</body>
</html>

















<!-- <!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body> 
	<div class="container">
	<h1 align="center">EDIT DATA</h1>
	<form method="post" action="insert.php">
		<input type="hidden" name="id" value="<?= $row['id'] ?>">
		<label for="1"> Nama :</label>
		<input class="form-control shadow" type="text" name="nama" id="1" placeholder="Masukan Nama" value="<?= $row['nama'] ?>">  
		<br><br>
		<label for="2">Email :</label>
		<input class="form-control shadow" type="email" name="email" id="2" placeholder="Masukan Email" value="<?= $row['email'] ?>">
		<br><br>
		<label for="3">No.HP :</label>
		<input class="form-control shadow" type="number" name="no_hp" id="3" placeholder="Masukan Nomor" value="<?= $row['no_hp'] ?>">
		<br><br>
		<label for="4">Divisi :</label>
		<input class="form-control shadow" type="text" name="divisi" id="4" placeholder="masukan Divisi" value="<?= $row['divisi'] ?>">
		<br><br>
		<button type="submit" class="btn btn-primary" name="Submit">Update Data</button>
	</form>
	</div>
</body>
</html> -->