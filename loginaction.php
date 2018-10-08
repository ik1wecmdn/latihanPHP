<?php

	$email = $_POST['txtEmail'];
	$password = $_POST['txtPassword'];


	if($email == 'admin@informatika1.com'){
		if($password == 'admin123'){
			//user dan password benar
			//header('location:admin.php');
			echo json_encode(['status'=>'OK','message'=>'SUKSES']);
		}else{
			//header('location:login.php?pesan=Password salah');
			echo json_encode(['status'=>'ERROR','message'=>'Password anda salah']);
		}
	}else{
		//header('location:login.php?pesan=Email salah');
		echo json_encode(['status'=>'ERROR','message'=>'Email tidak ditemukan']);
	}

?>