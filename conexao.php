<?php

	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sistema";
	
	$con = new mysqli($host, $username, $password, $dbname);
	
	
        if (empty($con)) {
	    echo "erro";
	}
        
?>
