<?php

$serventname = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($serventname, $username, $password, $dbname);

if($conn->connect_error){
    die("connect Failed;" . $conn->connect_error);
} else {
    echo "connected Successfuly";
}   