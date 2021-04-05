<?php
//Initialize system variables
$host_server =$user = $passcode = $database ='';
//Import system variables
include "authentication/credentials.php";

$servername = $host_server;
$username = $user;
$password = $passcode;
$dbname = $database;

//create and execute connection based off credentials
$conn = new mysqli($servername,$username,$password,$dbname);

// the connection
if ($conn->connect_error) {
    $conn -> close();
}


