<!DOCTYPE html>
<html>
<head>
	<title>Latihan PHP</title>
	<style>
		label{
			display: block;
			margin-top: 15px;
		}
		.btn-save{
			margin-top: 20px;
			line-height: 30px;
			display: block;
		}

	</style>
</head>
<body>
	
	<form name="formRegister" method="post" action="registeraction.php">
		<h2>Register</h2>
		<label>Email Address :</label>
		<input type="email" name="txtEmail"><br>
		<label>Password :</label>
		<input type="password" name="txtPassword"><br>
		<label>Ulangi Password : </label>
		<input type="password" name="txtRepassword"><br>
		<label>Nama Lengkap :</label>
		<input type="text" name="txtNama"><br>
		<label>Alamat :</label>
		<textarea name="txtAlamat"></textarea><br>
		<label>Jenis Kelamin : </label>
		<input type="radio" name="optJK" value="L">Laki Laki<br>
		<input type="radio" name="optJK" value="P">Perempuan<br>
		<label>Tanggal Lahir : </label>
		<select name="tglLhr">
			<?php
			for($i=1;$i<=31;$i++){
				echo "<option>".$i."</option>";
			}
			?>
		</select>
		<select name="blnLhr">
			<?php
			$arrBulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli"];
			foreach ($arrBulan as $bulan) {
				echo "<option>".$bulan."</option>";
			}
			?>
		</select>
		<select name="thnLhr">
			<?php
			$tahunSekarang = date('Y');
			// echo "<option>".$tahunSekarang."</option>";
			for($i=$tahunSekarang;$i>=$tahunSekarang-60;$i--){
				echo "<option>".$i."</option>";
			}
			?>
		</select><br>
		<input class="btn-save" type="submit" name="submit" value="SEND">
		<!-- <button type="submit">SEND</button> -->
	</form>

</body>
</html>