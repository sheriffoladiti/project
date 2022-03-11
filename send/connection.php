<?php

    $servername = 'localhost';
    $dbname = '';// your database name 
    $username = ''; // database username 
    $password = ''; // database password 

    // Create connection
    $db = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    
?>
