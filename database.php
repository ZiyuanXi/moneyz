<?php

class database{
	
	private $host;
	private $username;
	private $password;
	private $dbh;
	private $database;


	public function __construct(){
		$this->host='localhost';
		$this->username='root';
		$this->passwordt='';
		$this->database='moneyz';

		try{
			$dsn = "mysql:host=$this->host;dbname=$this->database";
			$this->$dbh = new PDO($dsn, $this->username, $this->password);
		} catch (PDOException $e){
			die("Unable to connect. Error: " . $e.getMessage()); 
		}
	}

	public function select($statement, $named_placeholder){

		$stmt = $this->dbh->prepare($statement);
		$stmt->excute($named_placeholder);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}




}


?>