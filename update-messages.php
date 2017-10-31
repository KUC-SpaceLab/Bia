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
	
	$username = test_input($_GET['username']);
	$message = test_input($_GET['message']);
	$school = test_input($_GET['school']);


	if ($message == "" || $username == "") {
		die();
	}


    // Add message to the database
    $sql = "INSERT INTO messages ( username, school, message)
            VALUES (:username, :school, :message)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":message", $message);
	$stmt->bindParam(":school", $school);


    $result = $stmt->execute();
