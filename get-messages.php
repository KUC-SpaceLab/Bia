<?php

    //Connecting to Database
    require "dbconnect.php";

    //Function to filter Input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
		return $data;
    }
	
	//Get and Filter Username Cookie
	$username = test_input($_GET['username']);
    
	//Select All Messages from the database
	$sql = "SELECT * FROM messages";
	
	foreach ($conn->query($sql) as $row) {
        echo $row['username'];
		echo "\\";
		echo $row['school'];
		echo "\\";
        echo  $row['message'];
		echo "\n";

    }
	

