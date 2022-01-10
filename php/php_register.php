<?php

require_once 'data_connection.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$error = '';
$success = '';

if(isset($_POST['submit'])){
        $regEmail = $_POST['email'];
        $regUsername = $_POST['username'];
        $regPassword = $_POST['password'];
        $regConfPassword = $_POST['confpassword'];

        if(empty($regEmail) || empty($regUsername) || empty($regPassword) || empty($regConfPassword)){
            $error = 'You have to fill all spaces';
        }

        if(strlen($regUsername) >=15) {
            $error = 'Username has to be at least 5 letters and a maximum of 15 letters';
        }

        if (strlen($password) >=20) {
            $error = 'Password has to be at least 5 characters and a maximum of 20 characters';
        }

        if(!preg_match('/^[a-zA-Z_]+$/', $regUsername)){
            $error = 'You can only use letters in username';
        }

        if($regPassword != $regConfPassword){
            $error = 'Passwords doesnt match';
        }

        if(empty($error)){
            $pdo = connectToDB();
            $sql = "SELECT * FROM users WHERE username = '$regUsername'";
            $sql_result = $pdo -> query($sql);
            $result = count($sql_result->fetchAll());
            if($result > 0) {
                $error = 'user already exist';
            } else {
                $newPassword = password_hash($regPassword, PASSWORD_DEFAULT);
                $sql_insert = "INSERT INTO users(username, email, password) VALUES ('$regUsername', '$regEmail', '$newPassword')";
                $pdo -> query($sql_insert);
                $success ='user has been added';
            }
        }

    }
?>