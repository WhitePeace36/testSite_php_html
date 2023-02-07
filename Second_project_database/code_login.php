<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test";
    
    // Creating a connection
    $conn = new mysqli($servername, 
                $username, $password,$database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failure: " 
            . $conn->connect_error);
    }

    $pw_database = $conn->query("SELECT 'password' FROM daten WHERE column_name = ".$_POST["username"]);

    echo $pw_database->;
    $conn->close();
 ?>