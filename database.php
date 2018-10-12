<?php
class MyDatabase{
	var $koneksi;

	function __construct(){

		$this->koneksi = new PDO("mysql:host=localhost;dbname=dbsekolah","root","");
		$this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	function Execute($query, $data=[]){
		try{
			$stmt = $this->koneksi->prepare($query);
			$stmt->execute($data);
		} catch (PDOException $ex){
			throw new Exception("ERROR EXECUTE QUERY");
		}
	}

	function GetData($query, $data=[]){
		try{
			$stmt = $this->koneksi->prepare($query);
			$stmt->execute($data);
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		} catch (PDOException $ex){
			throw new Exception("GET DATA ERROR");
		}
	}

	function __destruct(){
		$this->koneksi = null;
	}
}