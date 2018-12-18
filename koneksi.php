<?php 

$server = 'localhost';
$user = 'ferrynuryaman71';
$pass = 'nuryaman';
$db = 'PDO';

try {
	$dbConn = new PDO("mysql:host={$server}; dbname={$db}", $user, $pass );
 //set error
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo 'connect succes';
} catch (PDOExpection $e) {
	die("Connection error:" . $e->getMessage(). "<br>" );
}
 ?> 