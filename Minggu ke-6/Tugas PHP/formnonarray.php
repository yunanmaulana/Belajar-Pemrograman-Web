<!DOCTYPE html>
<html>
<head>
	<title>Latihan Form Non Array</title>
</head>
<style>
	body{
		text-align: left;
		font-size: 16px;
	}
	form th{
		padding: 10px;
	}
	.input{
		padding: 10px;
		width: 450px;
		margin: auto;
		background-color: lightgrey;
	}
	.output{
		padding: 10px;
		width: 680px;
		margin: auto;
	}
	.output table{
		text-align: center;
		width: 680px;
		padding: 5px;
		margin: auto;
		border-collapse: collapse;
	}
	.output th{
		padding: 14px;
	}
	.output td{
		font-size: 15px;
		padding: 4px;
		height: 30px;
	}
	.output table td:nth-child(5){
		text-align: left;
	}
	table input[type='text']{
		width: 250px;
	}
	table select{
		width: 250px;
	}
	table input[type='number']{
		width: 250px;
	}
	table input[type='submit']{
		width: 80px;
		background-color: orange;
		border: none;
		border-radius: 20px;
		padding: 12px;
	}

</style>
<body>
	<div class="input">
	<form action = "formnonarray.php" method = "POST">
		<table>
			<tr>
				<th>NIM</th>
				<th><input type="text" name="nimMhs"></th>
			</tr>
			<tr>
				<th>Program Studi</th>
				<th>
					<select name = "psMhs" >
						<option value= ""> </option>
						<option value ="Teknik Informatika S1">Teknik Informatika S1</option>
						<option value ="Sistem Informasi S1">Sistem Informasi S1</option>
						<option value ="Teknik Informatika D3">Teknik Informatika D3</option>
					</select>
				</th>
			</tr>
			<tr>
				<th>Nilai Tugas</th> 
				<th><input type="number" name="nilTugas" max="100"></th>
			</tr>
			<tr>
				<th>Nilai UTS</th> 
				<th><input type="number" name="nilUts" max='100'></th>
			</tr>
			<tr>
				<th>Nilai UAS</th> 
				<th><input type="number" name="nilUas" max='100'></th>
			</tr>
			<tr>
				<th>Catatan Khusus</th>
				<th>
					<input type="checkbox" name="ck01" value="Kehadiran >= 70%"> Kehadiran >= 70% <br>
					<input type="checkbox" name="ck02" value="Interaktif dikelas"> Interaktif dikelas <br>
					<input type="checkbox" name="ck03" value="Tidak terlambat mengumpulkan tugas">Tidak terlambat mengumpulkan tugas <br>
				</th>
			</tr>
			<tr>
				<th></th>
				<th><input type="submit" name="simpan" value="Simpan"></th>
			</tr>
		</table>
	</form>
	</div>
	<br><br>

<?php
if (isset($_POST['simpan'])) {
//output ps
	$psMhs = $_POST['psMhs'];
	
	
//output nim
	$nimMhs = $_POST['nimMhs'];
	
//output na
	$nilTugas = $_POST['nilTugas'];
	$nilUts = $_POST['nilUts'];
	$nilUas = $_POST['nilUas'];
	$nilAkhirA = (0.4 * $nilTugas) + (0.3 * $nilUts) + (0.3 * $nilUas);
	
	
	if($nilAkhirA > 84){
		$nilAkhirH = "A";
	}
	else if($nilAkhirA > 70){
		$nilAkhirH = "B";
	}
	else if($nilAkhirA > 60){
		$nilAkhirH = "C";
	}
	else if($nilAkhirA > 50){
		$nilAkhirH = "D";
	}
	else
		$nilAkhirH = "E";
	
//output stts

	if($nilAkhirA > 60){
		$stts = "Lulus";
	}
	else
		$stts = "Tidak Lulus";

	
	
}
?>

	<div class="output">
		<table border = "2px solid">
			<tr>
               <th colspan="2">Program Studi</th>
               <th colspan="2">NIM</th>
               <th colspan="2">Nilai Akhir</th>
               <th colspan="2">Status</th>
               <th colspan="2">Catatan Khusus</th>
           </tr>
           <tr>
           		
           		<td colspan="2"> <?php if (isset($_POST['simpan'])){ ?>
          	     				 <?php echo $psMhs; ?> 
          	     				 <?php } ?>
          	 	</td> 
               	<td colspan="2"> <?php if (isset($_POST['simpan'])){ ?>
          	     				 <?php echo $nimMhs; ?> 
          	     				 <?php } ?>
                </td>   
               <td colspan="2">  <?php if (isset($_POST['simpan'])){ ?>
          	     				 <?php echo $nilAkhirA; ?>
          	     				 <?php echo "|"?>
          	     				 <?php echo $nilAkhirH;?> 
          	     				 <?php } ?>
               </td>
               <td colspan="2">  <?php if (isset($_POST['simpan'])){ ?>
          	     				 <?php echo $stts; ?> 
          	     				 <?php } ?>
               	
               </td>
               <!-- output ck -->
               <td colspan="2">  
               					 <?php if (isset($_POST['simpan'])){ ?>
               					 <?php echo "<ul>"?>
          	     				 <?php if (isset($_POST['ck01'])) { ?>
								 <?php $ck01 = "<li>" . $_POST['ck01'] . "</li>"; ?> 
								 <?php echo $ck01?>
								 <?php } ?>
								 <?php if (isset($_POST['ck02'])) { ?>
								 <?php $ck02 = "<li>" . $_POST['ck02'] . "</li>"; ?>
								 <?php echo $ck02?>
								 <?php } ?>
								 <?php if (isset($_POST['ck03'])) { ?>
								 <?php $ck03 = "<li> " . $_POST['ck03'] . "</li>"; ?>
								 <?php echo $ck03?>
								 <?php } ?> 
								 <?php echo "</ul>"?>
          	     				 <?php } ?>
               	
               </td>
           
            </tr>
		</table>
	</div>

</body>
</html>

