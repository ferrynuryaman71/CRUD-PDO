<?php 

include_once 'koneksi.php';

if (isset($_POST['Submit'])) {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];
	$divisi = $_POST['divisi'];

$sql = "INSERT INTO siswa(nama,email,no_hp,divisi) VALUES(:nama, :email, :no_hp, :divisi)";

$query = $dbConn->prepare($sql);

	$query->bindparam(":nama", $nama);
	$query->bindparam(":email", $email);
	$query->bindparam(":no_hp", $no_hp);
	$query->bindparam(":divisi", $divisi);
	$query->execute();

}

if ($query) {
	header('Location: list.php');
}else {
	echo "gagal";
}

 ?>