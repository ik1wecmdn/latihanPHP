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
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-header primary-color lighten-1 white-text">Form Input Data Siswa</div>
                    <div class="card-body">
                        
                        <form id="formSiswa" action="form-siswa-action.php" method="post">
                            
                            <div class="md-form">
                                <input type="text" id="txtNis" name="txtNis" class="form-control">
                                <label for="txtNis" >Nomor Induk Siswa : </label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="txtNama" name="txtNama" class="form-control">
                                <label for="txtNama" >Nama Lengkap : </label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="txtKelas" name="txtKelas" class="form-control">
                                <label for="txtKelas" >Kelas : </label>
                            </div>
                            <div class="md-form">
                                <textarea type="text" id="txtAlamat" name="txtAlamat" class="md-textarea form-control" rows="3"></textarea>
                                <label for="txtAlamat">Alamat Lengkap :</label>
                            </div>
                            <p>Jenis Kelamin : </p>
                            <div class="custom-control custom-radio">
                                  <input type="radio" class="custom-control-input" id="rdoLaki" name="rdoJK" value="L">
                                  <label class="custom-control-label" for="rdoLaki">Laki Laki</label>
                            </div>
                            <div class="custom-control custom-radio">
                                  <input type="radio" class="custom-control-input" id="rdoPerem" name="rdoJK" value="P">
                                  <label class="custom-control-label" for="rdoPerem">Perempuan</label>
                            </div>
                            <div class="md-form">
                                <input type="tel" id="txtNoHp" name="txtNoHp" class="form-control">
                                <label for="txtNoHp" >Nomor HP : </label>
                            </div>
                            <div class="md-form">
                                <input type="email" id="txtEmail" name="txtEmail" class="form-control">
                                <label for="txtEmail" >Email Address : </label>
                            </div>
                            
                            <button class="btn btn-primary" type="submit" ><i class="fa fa-save"></i> SAVE</button>

                        </form>

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