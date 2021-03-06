<?php

require('db_credentials.php');

class Database {
	public $db = null;
	public $results = null;

	function db_connect(){
		$this->db = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
		if (mysqli_connect_errno()) {
			return false;
		}else{
			return true;
		}
	}

	// Execute query
	function db_query($sqlQuery){
		if ((!$this->db_connect()) || ($this->db==null) ) {
			echo "db connect failed";
			return false;
		}

		$this->results = mysqli_query($this->db, $sqlQuery);
		return $this->results;
	}

	function db_fetch(){
		if (!($this->results)) {
			return false;
		}
	
		return mysqli_fetch_assoc($this->results);
	}
}
?>
