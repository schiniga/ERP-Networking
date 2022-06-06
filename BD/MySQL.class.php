<?php

class MySQL{
	
	private $connection;
	
	public function __construct(){
		$this->connection = new mysqli("localhost","root","","erp_networking");
		$this->connection->set_charset("utf8");
	}
	public function __destruct(){
		mysqli_close($this->connection);
	}
	public function executa($sql){
		$result = $this->connection->query($sql);
		return $result;
	}
	public function consulta($sql){
		$result = $this->connection->query($sql);
		$item = array();
		$data = array();
		while($item = mysqli_fetch_array($result)){
			$data[] = $item;
		}
		return $data;
	}
	public function generate_console_dev($message){
		date_default_timezone_set("America/Sao_Paulo");
		$date_utc_br = date("Y-m-d H:i:s");
		$this -> executa("INSERT INTO console_dev (date, message) values ('".$date_utc_br."', '".$message."')");
	}
	public function generate_console_admin($message){
		date_default_timezone_set("America/Sao_Paulo");
		$date_utc_br = date("Y-m-d H:i:s");
		$this -> executa("INSERT INTO console_admin (date, message) values ('".$date_utc_br."', '".$message."')");
	}
}

	/*
	if(!$connection){
		die("Connection failed: ". mysqli_connect_error());
	}
	*/
?>