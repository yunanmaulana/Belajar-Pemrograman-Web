<?php 
$engi = "mysql"; 
$host = "localhost"; 
$dbse = "crud_pdo"; 
$user = "root"; 
$pass = ""; 
$koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host, $user,$pass);
$conn = mysqli_connect("localhost","root","","crud_pdo");
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	} 
?>