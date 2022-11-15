<?php

$servername = "localhost"; //same / local system 
$username = "root";
$password = "root";
$dbname = "employee";
$port = "3308";

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die("DB not connected!");
}


////
