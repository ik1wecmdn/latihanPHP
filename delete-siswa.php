<?php
	$nis = @$_GET["nis"];
	
	require_once("database.php");
	try{
		$db = new MyDatabase();
		$db->Execute("DELETE FROM siswa WHERE nis = ?", 
		[$nis] );
				
		header('location:siswa.php');
	}catch(Exception $ex){
		echo "<h1>ERROR SIMPAN DATA : {$ex->getMessage()}</h1>";
	}	
	
?>