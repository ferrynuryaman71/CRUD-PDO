<?php 

include_once 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM siswa WHERE id= :id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id'=> $id));

if ($query) 
	header('Location: list.php');
else
	echo "delete data gagal";



// //including the database connection file
// include("config.php");
 
// //getting id of the data from url
// $id = $_GET['id'];
 
// //deleting the row from table
// $sql = "DELETE FROM users WHERE id=:id";
// $query = $dbConn->prepare($sql);
// $query->execute(array(':id' => $id));
 
// //redirecting to the display page (index.php in our case)
// header("Location:index.php");
