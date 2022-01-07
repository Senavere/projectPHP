<?php
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

        if(!isset($error)){
            $sql = "SELECT username FROM users WHERE username = '$regUsername'";
            $sql_result = $pdo -> query($sql);
            $result = count($sql_result->fetchAll());
            if($result > 0) {
                echo 'user already exist';
            } else {
                $newPassword = password_hash($regPassword, PASSWORD_DEFAULT);
                $sql_insert = "INSERT INTO users(username, email, password) VALUES ($regUsername, $regEmail, $regPassword)";
                $pdo -> query($sql_insert);
                echo 'user has been added';
            }
        }

    }
?>