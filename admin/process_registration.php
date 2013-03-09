<?php

session_start();
if(session_is_registered("admin")!=1){
header("location:../index.php");
}

include("../db.php");

$username = $_POST['username'];
$fullname = $_POST['fullname'];
$password = $_POST['password'];
$email = $_POST['email'];
$admin = $_POST['admin'];

// MySQL Injection protect!
$username = stripslashes($username);
$fullname = stripslashes($fullname);
$password = stripslashes($password);
$email = stripslashes($email);
$admin = stripslashes($admin);

$username = mysql_real_escape_string($username);
$fullname = mysql_real_escape_string($fullname);
$password = mysql_real_escape_string($password);
$email = mysql_real_escape_string($email);
$admin = mysql_real_escape_string($admin);

mysql_set_charset('utf8'); 

$result = mysql_query("INSERT INTO `users` (`username`,`password`,`full_name`,`email`,`admin`) VALUES ('$username','$password','$fullname','$email','$admin')");

header('Location: regform.php');

?>