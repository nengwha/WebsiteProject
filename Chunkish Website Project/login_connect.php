<?php

$servername = "127.0.0.1:4306";
$username = "root";   
$password = "12345";        
$dbname = "login"; 

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    echo "Failed to connect DB" .$conn->connect_error;
}

?>