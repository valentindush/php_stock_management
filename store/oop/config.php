<?php

    //DB CONFIGURATION

    $host = "localhost";
    $db = "stock";
    $password = "";
    $username = "root";

    $connection = mysqli_connect($host,$username,$password,$db) or die("Connection failed")

?>