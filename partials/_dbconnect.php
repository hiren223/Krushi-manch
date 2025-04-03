<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "krushi-manch";

$conn= mysqli_connect($server, $username, $password, $database);
if(!$conn){
    die('Error'.mysqli_connect_error());
}

?>