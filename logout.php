<?php
require_once 'php/php_init.php';

$_SESSION = array();

session_destroy();

header("location: login.php");
exit;
