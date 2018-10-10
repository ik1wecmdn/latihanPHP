<?php
class MyDatabase{
	var $koneksi;

	function __construct(){
		$this->koneksi = new PDO("mysql:host=localhost;dbname=dbsekolah","root","");

	}

	function Execute($query, $data=[]){
		$stmt = $this->koneksi->prepare($query);
		$stmt->execute($data);
	}

	function GetData($query, $data=[]){
		$stmt = $this->koneksi->prepare($query);
		$stmt->execute($data);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

	function __destruct(){
		$this->koneksi = null;
	}
}