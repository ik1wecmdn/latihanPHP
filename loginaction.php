<?php
	session_start();

	$email = $_POST['txtEmail'];
	$password = $_POST['txtPassword'];


	// if($email == 'admin@informatika1.com'){
	// 	if($password == 'admin123'){
	// 		//user dan password benar
	// 		//header('location:admin.php');

	// 		$_SESSION['sudah_login'] = true;

	// 		echo json_encode(['status'=>'OK','message'=>'SUKSES']);
	// 	}else{

	// 		$_SESSION['sudah_login'] = false;

	// 		//header('location:login.php?pesan=Password salah');
	// 		echo json_encode(['status'=>'ERROR','message'=>'Password anda salah']);
	// 	}
	// }else{

	// 	$_SESSION['sudah_login'] = false;

	// 	//header('location:login.php?pesan=Email salah');
	// 	echo json_encode(['status'=>'ERROR','message'=>'Email tidak ditemukan']);
	// }

	require_once('database.php');
	$db = new MyDatabase();
	$user = $db->GetData("SELECT * FROM user WHERE email=? AND passwd=PASSWORD(?)",
		[$email,$password]);

	if(count($user)>0){
		$_SESSION['sudah_login'] = true;
		$_SESSION['login_name'] = $user[0]['nama_lengkap'];
		$_SESSION['login_jabatan'] = $user[0]['jabatan'];
		echo json_encode(['status'=>'OK','message'=>'SUKSES']);
	}else{
		session_unset();
		echo json_encode(['status'=>'ERROR','message'=>'Email atau Password anda salah']);
	}


?>