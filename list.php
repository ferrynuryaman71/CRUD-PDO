<?php  

include_once 'koneksi.php';

$result = $dbConn->query("SELECT * FROM siswa ORDER BY id DESC");
$count = $dbConn->query("SELECT count(*) FROM siswa");

$Jumlah = $count->fetchColumn();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Santri</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div align="center" class="container">
		<h1>DAFTAR SANTRI</h1>
		<div align="right">
			<a href="add.php?id=<?= $row['id'] ?>">TAMBAH DATA</a>
		</div>
	<table  class="table table-hover border border-light shadow" border="1" cellpadding="10" cellpadding="10" >
		
		<tr class="bg-primary" align="center">
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>No_hp</th>
			<th>Divisi</th>
			<th>Action</th>
		</tr>
		<tr>
			<?php $nomor=1; ?>
			<?php while ($row=$result->fetch(PDO::FETCH_ASSOC)) :?>
				<tr>
					<td><?= $nomor ?></td>
					<td><?= $row['nama']; ?></td>
					<td><?= $row['email']; ?></td>
					<td><?= $row['no_hp']; ?></td>
					<td><?= $row['divisi']; ?></td>
					<td>
						<a href="edit.php?id=<?= $row["id"]; ?>">Ubah</a> |
						<a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
				</td>
				</tr>
				<?php $nomor++; ?>
			<?php endwhile ?>
		</tr>
	</table>
	<p align="left">Jumlah Santri: <?= $Jumlah ?></p>
	</div>
</body>
</html>



<!-- <?php 

include('koneksi.php');

$query = mysqli_query($koneksi, "SELECT * FROM  santri_pondok");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title>List Santri</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Daftar Santri <b>Pondok Programer</b></h2>
					</div>
				</div>
			</div>
			<table class="table table-striped">
				<tr>
					<th>Nama</th>
					<th>Email</th>
					<th>No_hp</th>
					<th>Divisi</th>
					<th>Action</th>
				</tr>

				<?php foreach ($result as  $result) : ?>
					<tr>
						<td><?php echo $result['nama'] ?></td>
						<td><?php echo $result['email'] ?></td>
						<td><?php echo $result['no_hp'] ?></td>
						<td><?php echo $result['divisi'] ?></td>
						<td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
					</tr>
				<?php endforeach ?>
			</table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
			</div>
		</div>
	</div>
</body>
</html> -->