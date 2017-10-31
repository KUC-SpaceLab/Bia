<?php

//DB Connection Details
$username = "root";
$password ="";

try {
    //Begin Connection
    $conn = new PDO("mysql:host=127.0.0.1;dbname=bia", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


