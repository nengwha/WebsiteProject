<?php

include 'login_connect.php';

if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        echo "Email Address Already Exists";
    }
    else{
        $insertQuery="INSERT INTO users (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";

        if($conn->query($insertQuery) === TRUE){
           header("location: login.html");
        }
        else{
            echo "Error: ".$conn->error;
        }
    }
}

?>