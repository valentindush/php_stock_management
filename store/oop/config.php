<?php

    $host = '=localhost';
    $db   = 'stock';
    $user = 'root';
    $pass = '';
    
    $connection = mysqli_connect($host, $user, $pass, $db) or die("Unable to connect to DB");
    
?>