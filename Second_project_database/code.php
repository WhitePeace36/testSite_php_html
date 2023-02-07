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
    
      $sql = "CREATE table IF NOT EXISTS daten (
          id int NOT NULL AUTO_INCREMENT,
          firstname varchar(500) not null,
          lastname varchar(500) not null,
          birthday varchar(500) not null,
          email varchar(500) not null,
          `password` varchar(500) not null,
          street varchar(500) not null,
          housenumber varchar(500) not null,
          PLZ varchar(500) not null,
          `state` varchar(500) not null,
          city varchar(500) not null,
          telephone varchar(500) null,
          primary key (id)
          );";

    $conn->query($sql);


    $password = $_POST["password"];   
    $password = md5($password);

    $sql = "INSERT INTO daten (firstname, lastname, birthday, email,'password',street,housenumber,PLZ,'state',city,telephone)
          VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["birthday"]."','".$_POST["email"]."','".$password
      ."','".$_POST["street"]."','".$_POST["housenumber"]."','".$_POST["plz"]."','".$_POST["city"]."','".$_POST["state"]."','".$_POST["telephone"]."');";

echo $sql;
    $conn->query($sql);


    $conn->close();
 ?>