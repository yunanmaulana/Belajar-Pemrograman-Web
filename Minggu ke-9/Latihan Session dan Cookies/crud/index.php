<?php 
include 'conn.php'; 
include 'conf.php';
?> 
<!DOCTYPE html> 
<html> 
<head> 
	<title>PDO CRUDSRUD</title> 
	<link rel="stylesheet" type="text/css" href="assets/css/css.css"> 
</head>
<?php 
	$query = "select * from tb_user ";
	$sql = mysqli_query($conn, $query); 
	session_start();
	$data = mysqli_fetch_row($sql);
	if ($_SESSION['hak']=="1"){
		echo "Halo ";
		echo "$data[2]";
		echo "<br>";
		echo "Anda telah login sebagai <b>ADMIN</b>";
	} $data = mysqli_fetch_row($sql);
	if($_SESSION['hak']=="2"){
		echo "Halo ";
		echo "$data[2]";
		echo "<br>";
		echo "Anda telah login sebagai <b>OPERATOR</b>";
	}
	
	

?>
<body> 
	<div class="top-gray"></div> 
	<div class="header"> 
		<div class="big-logo">Latihan CRUDSRUD</div> 
		<?php include 'menu.php';?> 
	</div> 
	<div class="content">
		<div class="container"> 
			<?php 
			if(!is_null(get('p'))){ 
				switch (get('p')) { 
				case 'home': inc('home'); 
				break; 
				case 'sekolah': 
				switch (get('m')) { 
					case 'home': inc('tampilan/sekolah/all'); 
					break; 
					case 'add': inc('tampilan/sekolah/add'); 
					break; 
					case 'edit': inc('tampilan/sekolah/edit'); 
					break; 
					default: inc('tampilan/sekolah/all'); 
					break; 
				} 
				break;
				default: inc('home'); 
				break; 
			} 
		}
		else{ 
			inc('home'); 
		} ?> 
	</div>
	<a href="logout.php"><input type="submit" name="logout" value="LOGOUT"></a>
	</div> 
</body>
</html>
