<?php 
include "pbo02.php"; 
echo "<html><head><title>Mahasiswa</title></head><body>"; 
$form = new Form ("","Input Form"); 
$form->addField ("txtnim", "Nim"); 
$form->addField ("txtnama", "Nama"); 
$form->addField ("txtalamat", "Alamat"); 
echo "<h3>Silahkan isi form berikut ini :</h3>"; 
$form->displayForm(); 
echo "</body></html>"; 
?>