<?php  
session_start();
include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($conn,"select * from tb_user where username='$username' and password='$password'");


$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['hak']=="1"){
		$_SESSION['username'] = $username;
		$_SESSION['hak'] = "1";
		header("location:index.php");
	} else if ($data['hak']=="2"){
		$_SESSION['username'] = $username;
		$_SESSION['hak'] = "2";
		header("location:index.php");
	} else {
		header("location:login.php?pesan=gagal");
	}
}
else{
	header("location:login.php?pesan=gagal");
}
?>