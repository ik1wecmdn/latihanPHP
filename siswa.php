<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Data Siswa</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<!-- MDBootstrap Datatables  -->
		<link href="css/addons/datatables.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<!-- Start your project here-->
					<h1>Data Siswa</h1>
					
					<p><a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Siswa</a></p>
					<?php
					require_once("database.php");
					$db = new MyDatabase();
					$data = $db->GetData("SELECT * FROM siswa");
					?>
					<div class="table-responsive text-nowrap">
						<table id="tabelSiswa" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>NIS</th>
									<th>NAMA</th>
									<th>KELAS</th>
									<th>ALAMAT</th>
									<th>JK</th>
									<th>NO HP</th>
									<th>EMAIL</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach($data as $row){
								?>
								<tr>
									<td><?php echo $row['nis']; ?></td>
									<td><?php echo $row['nama']; ?></td>
									<td><?php echo $row['kelas']; ?></td>
									<td><?php echo $row['alamat']; ?></td>
									<td><?php echo $row['jk']; ?></td>
									<td><?php echo $row['no_hp']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td align="center">
										<a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
									</td>
								</tr>
								<?php
								} // <-- tutupe foreach
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- /Start your project here-->
		<!-- SCRIPTS -->
		<!-- JQuery -->
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="js/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="js/mdb.min.js"></script>
		<!-- MDBootstrap Datatables  -->
		<script type="text/javascript" src="js/addons/datatables.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#tabelSiswa").DataTable();
			});
		</script>
	</body>
</html>