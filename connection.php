<?php

    $servername = 'localhost';
    $dbname = 'kattrinc_teamproject';
    $username = 'kattrinc_ekaterinashevchenko'; 
    $password = '123qweRTYuio))';

    // Create connection
    $db = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    
?>
