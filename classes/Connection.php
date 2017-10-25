<?php

class Connection {

	public $conn;
	private static $instance;


	public  function __construct ()
	{
		try{

			$this->conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);

			$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



		}catch(PDOException $e){

			echo 'konekcija neuspesna';
		}
	}

	public static function getInstance()
	{
			if(!self::$instance){
				self::$instance = new Connection();
			}
			return self::$instance;
	}
}
