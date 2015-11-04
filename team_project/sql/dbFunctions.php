<?php
	function getConnection() {
		$host = "localhost"; 
	    $dbname = "ziel5122";    //your otterid 
	    $username = "ziel5122";     //your otterid 
	    $password = "p455w0rd"; 
	
	    //creates connection to database 
	    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 
	
	    // Setting Errorhandling to Exception 
	    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	
	    return $dbConn; 
	}
	
	function getData($sql, $dbConn) {
		$statement = $dbConn->prepare($sql);
		$statement->execute();
		$records = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		return $records;
	}
?>