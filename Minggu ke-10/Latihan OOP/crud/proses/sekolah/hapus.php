<?php 
include '../../conf.php'; 
include '../../conn.php'; 
$id = get('id');
$koneksi = new Koneksi(); 
$hapus = $koneksi->delete($id);
if ($hapus){
  header("location:../../index.php?p=sekolah"); 
}
?>
