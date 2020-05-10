<!DOCTYPE html>
<html>
<head>
	<title>Login CRUDSRUD</title>
	<style>
		body{
		font-family: sans-serif;
		background: #ebf9fb;
		}

		h1{
		text-align: center;
		font-weight: 300;
		}

		.tulisan{
		text-align: center;
		text-transform: uppercase;
		}

		.kotak{
		width: 350px;
		background: #dd4814;
		margin: 80px auto;
		padding: 30px 20px;
		box-shadow: 0px 0px 100px 4px #d6d6d6;
		}

		label{
		font-size: 11pt;
		}

		.formlogin{
		box-sizing : border-box;
		width: 100%;
		padding: 10px;
		font-size: 11pt;
		margin-bottom: 20px;
		}

		.tombollogin{
		background: #2aa7e2;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
		}

		.link{
		color: #232323;
		text-decoration: none;
		font-size: 10pt;
		}

		.alert{
		background: #e44e4e;
		color: white;
		padding: 10px;
		text-align: center;
		border:1px solid #b32929;
		}
	</style>
</head>
<body>

	<h1>LOGIN CRUDSRUD</h1>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<div class="kotak">
		<p class="tulisan">Login</p>
 
		<form action="ceklogin.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="formlogin" placeholder="masukkan username" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="formlogin" placeholder="masukkan password" required="required">
 
			<input type="submit" class="tombollogin" value="LOGIN">
		</form>
		
	</div>
</body>
</html>