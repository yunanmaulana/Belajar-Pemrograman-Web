<!DOCTYPE html>
<html>
<head>
	<title>Latihan Kalkulator</title>
	<style>
		form{
			padding: 5px;
		}
		table th{
			padding: 10px;
		}
	</style>
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['b1'];
		$bil2 = $_POST['b2'];
		$oper = $_POST['operator'];
		switch ($oper) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<form action = "kalkulator.php" method = "POST">
		<table>
			<tr>
				<th>Bil 1</th>
				<th>:</th>
				<th><input type="number" name="b1" ></th>	
			</tr>
			<tr>
				<th>Bil 2</th>
				<th>:</th>
				<th><input type="number" name="b2"></th>
			</tr>
			<tr>
				<th>Hasil</th>
				<th>:</th>
				<?php if(isset($_POST['hitung'])){ ?>
				<th><input type="text" value="<?php echo $hasil; ?>" disabled = "yes" ></th>
				<?php }else{ ?>
				<th><input type="text" value="0" disabled = "yes"></th>
				<?php } ?>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<th>Operator</th>
				<th>:</th>
				<th>
				<select name = "operator">
					<option value = ""> </option>
					<option value = "tambah">+ (Tambah)</option>
					<option value = "kurang">- (Kurang)</option>
					<option value = "kali">* (Kali)</option>
					<option value = "bagi">/ (Bagi)</option>
					</select>
				</th>
				<th><input type="submit" name="hitung" value="="></th>
				<th><input type="reset" name="reset" value = "C"></th>
			</tr>
		</table>
	</form>
</body>
</html>

