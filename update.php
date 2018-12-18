<?php 

include_once 'koneksi.php';

if (isset($_POST['update'])) {

	$id = $_POST['id'];

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];
	$divisi = $_POST['divisi'];

$sql = "UPDATE  siswa SET nama=:nama, email=:email, no_hp=:no_hp, divisi=:divisi WHERE id=:id";

$query = $dbConn->prepare($sql);

	$query->bindparam(":id", $id);
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