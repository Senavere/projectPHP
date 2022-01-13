<?php

require_once 'data_connection.php';

$error = '';
$success = '';

if(isset($_POST['submit'])){
        $regEmail = $_POST['email'];
        $regUsername = $_POST['username'];
        $regPassword = $_POST['password'];
        $regConfPassword = $_POST['confpassword'];

    /* Felmeddelanden om man inte skriver in rätt i fälten*/

        if(empty($regEmail) || empty($regUsername) || empty($regPassword) || empty($regConfPassword)){
            $error = 'You have to fill all spaces';
        }

        if(strlen($regUsername) >=15) {
            $error = 'Username has to be at least 5 letters and a maximum of 15 letters';
        }

        if (strlen($regPassword) >=20) {
            $error = 'Password has to be at least 5 characters and a maximum of 20 characters';
        }

        if(!preg_match('/^[a-zA-Z_]+$/', $regUsername)){
            $error = 'You can only use letters in username';
        }

        if($regPassword != $regConfPassword){
            $error = 'Passwords doesnt match';
        }

    /* Här kollar vi i databasen om användaren redan finns eller inte, om inte läggs man till i databasen och kan sen logga in*/

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