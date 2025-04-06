<?php

$server = "localhost";
$Username = "root";
$password = "";
$database = "krushi-manch";

$conn= mysqli_connect($server, $Username, $password, $database);
if(!$conn){
    die('Error'.mysqli_connect_error());
}

?>