<?php
session_start();

// $_SESSION['sudah_login'] = false;

// hapus variable session
unset($_SESSION['sudah_login']);

header('location:login.php');

?>