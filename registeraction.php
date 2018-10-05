<?php
//var
//if
//for
//arr

$email = $_POST["txtEmail"];
$nama = $_POST["txtNama"];
$jk = $_POST["optJK"];

echo "Hasil Inputan Anda adalah : <br>";
echo "Email : {$email}<br>";
if($jk == "L"){
	echo "Nama Lengkap : Mas <b>{$_POST["txtNama"]}</b><br>";
}else{
	echo "Nama Lengkap : Mbak <b>{$nama}<b><br>";
}



?>