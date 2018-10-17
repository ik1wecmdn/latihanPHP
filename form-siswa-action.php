<?php

$pos 	= filter_input(INPUT_POST, 'pos'); 
$nis 	= filter_input(INPUT_POST, 'txtNis'); 
$nama 	= filter_input(INPUT_POST, 'txtNama');
$kelas 	= filter_input(INPUT_POST, 'txtKelas');
$alamat = filter_input(INPUT_POST, 'txtAlamat');
$jk 	= filter_input(INPUT_POST, 'rdoJK');
$no_hp 	= filter_input(INPUT_POST, 'txtNoHp');
$email 	= filter_input(INPUT_POST, 'txtEmail');

require_once("database.php");
try{
	$db = new MyDatabase();
	
	if($pos==""){
		// Tambah Data
		$db->Execute("INSERT INTO siswa (nis,nama,kelas,alamat,jk,no_hp,email) VALUES (?,?,?,?,?,?,?)", 
		[$nis,$nama,$kelas,$alamat,$jk,$no_hp,$email] );
	} else {
		// Edit Data
		$db->Execute("UPDATE siswa SET nama=?,kelas=?,alamat=?,jk=?,no_hp=?,email=? WHERE nis = ?", 
		[$nama,$kelas,$alamat,$jk,$no_hp,$email,$pos] );		
	}
			
	header('location:siswa.php');
}catch(Exception $ex){
	echo "<h1>ERROR SIMPAN DATA : {$ex->getMessage()}</h1>";
}
?>
