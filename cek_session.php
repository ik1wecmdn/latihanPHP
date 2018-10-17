<?php
session_start();

if($_SESSION['sudah_login'] == false){
	//login dulu
	header('location:login.php');
}

?>