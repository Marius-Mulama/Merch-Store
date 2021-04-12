<?php

$host_server = "localhost";
$user = "root";
$password = "";
$database = "merch_store";

//create and execute connection based off credentials
$conn = new mysqli($host_server,$user,$password,$database);

// the connection
if ($conn->connect_error) {
    $conn -> close();
}


