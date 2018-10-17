<?php include('cek_session.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form Input Data Siswa</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Start your project here-->
    
    <div class="container-fluid">
        <div class="row mt-3 mb-5">
            <div class="col">
                <div class="card">
                    <div class="card-header primary-color lighten-1 white-text">Form Input Data Siswa</div>
                    <div class="card-body">
						<?php
						require_once("database.php");
						try{
							$nis = @$_GET['nis'];
							$db = new MyDatabase();
							
							if($nis){
								$data = $db->GetData("select * from siswa WHERE nis = $nis");
								$rsSiswa = $data[0];
							} else {
								$rsSiswa = ["nis"=>"","nama"=>"","kelas"=>"","alamat"=>"","jk"=>"","no_hp"=>"","email"=>""];
							}							
						?>
                        <form id="formSiswa" action="form-siswa-action.php" method="post">
                            <div class="md-form">
								 <!-- Membedakan Kondisi Tambah dan Edit  -->
								<input type="hidden" name="pos" value="<?php echo $nis; ?>"> 

                                <input type="text" id="txtNis" name="txtNis" value="<?php echo $rsSiswa["nis"]; ?>" class="form-control" <?php echo $nis!="" ? "readonly" : ""; ?>>
                                <label for="txtNis" >Nomor Induk Siswa : </label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="txtNama" name="txtNama" value="<?php echo $rsSiswa["nama"]; ?>" class="form-control">
                                <label for="txtNama" >Nama Lengkap : </label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="txtKelas" name="txtKelas" value="<?php echo $rsSiswa["kelas"]; ?>" class="form-control">
                                <label for="txtKelas" >Kelas : </label>
                            </div>
                            <div class="md-form">
                                <textarea type="text" id="txtAlamat" name="txtAlamat" class="md-textarea form-control" rows="3"><?php echo $rsSiswa["alamat"]; ?></textarea>
                                <label for="txtAlamat">Alamat Lengkap :</label>
                            </div>
                            <p>Jenis Kelamin : </p>
                            <div class="custom-control custom-radio">
                                  <input type="radio" class="custom-control-input" id="rdoLaki" name="rdoJK" value="L" <?php echo $rsSiswa["jk"]=="L" ? "checked" : ""; ?>>
                                  <label class="custom-control-label" for="rdoLaki">Laki Laki</label>
                            </div>
                            <div class="custom-control custom-radio">
                                  <input type="radio" class="custom-control-input" id="rdoPerem" name="rdoJK" value="P" <?php echo $rsSiswa["jk"]=="P" ? "checked" : ""; ?>>
                                  <label class="custom-control-label" for="rdoPerem">Perempuan</label>
                            </div>
                            <div class="md-form">
                                <input type="tel" id="txtNoHp" name="txtNoHp" value="<?php echo $rsSiswa["no_hp"]; ?>" class="form-control">
                                <label for="txtNoHp" >Nomor HP : </label>
                            </div>
                            <div class="md-form">
                                <input type="email" id="txtEmail" name="txtEmail" value="<?php echo $rsSiswa["email"]; ?>" class="form-control">
                                <label for="txtEmail" >Email Address : </label>
                            </div>
                            
                            <button class="btn btn-primary" type="submit" ><i class="fa fa-save"></i> SAVE</button>

                        </form>
						<?php
						}catch(Exception $ex){
							echo "<h1>{$ex->getMessage()}</h1>";
						}
						?>
                    </div>
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
</body>

</html>