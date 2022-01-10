<?php

require_once 'data_connection.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$error = '';

if(isset($_POST['submit'])){
        $loginUsername = $_POST['username'];
        $loginPassword = $_POST['password'];

        if(empty($loginUsername) || empty($loginPassword)){
            $error = 'You have to fill all spaces';
        }

        if(!preg_match('/^[a-zA-Z_]+$/', $loginUsername)){
            $error = 'You can only use letters in username';
        }


    if(empty($error)){
        $pdo = connectToDB();
        $sql = "SELECT username FROM users WHERE username = '$loginUsername'";
        $sql_result = $pdo -> query($sql);
        $result = count($sql_result->fetchAll());
        if($result == 0) {
            $error = 'user doesnt exist';
        } else {
            $sql_select = "SELECT * FROM users WHERE username = '$loginUsername'";
            $query_result = $pdo -> query($sql_select);
            $user = $query_result -> fetch();
        if(password_verify($loginPassword, $user['password'])) {
            session_start();
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['user_id'];
            header("location: ../index.php");
        }else {
            $error = 'password doesnt match';
        }
        }
    }
}
?>