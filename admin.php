<?php include('cek_session.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN - DASHBOARD</title>
</head>
<body>
	<h2>Selamat Datang <?php echo $_SESSION['login_name']; ?></h2>

	<?php
	if($_SESSION['login_jabatan'] == 'admin'){
	?>
		<a href="blog.php">BLOG</a> |
		<a href="siswa.php">SISWA</a> |  
	<?php
	}else{ //else if session
	?>
		<a href="blog.php">BLOG</a> |
	<?php
	} //tutup if session
	?>
	<a href="logout.php">LOGOUT</a>
</body>
</html>