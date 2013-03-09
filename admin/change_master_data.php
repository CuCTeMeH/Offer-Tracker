<?php
session_start();
if(session_is_registered("admin")!=1){
header("location:../index.php");
}

include("../db.php");

$company = $_POST['company'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$website = $_POST['website'];

// MySQL Injection protect!
$company = stripslashes($company);
$address = stripslashes($address);
$telephone = stripslashes($telephone);
$fax = stripslashes($fax);
$email = stripslashes($email);
$admin = stripslashes($admin);

$company = mysql_real_escape_string($company);
$address = mysql_real_escape_string($address);
$telephone = mysql_real_escape_string($telephone);
$fax = mysql_real_escape_string($fax);
$email = mysql_real_escape_string($email);
$website = mysql_real_escape_string($website);

$result = mysql_query("INSERT INTO `masters`(`company_name`,`address`,`telephone`,`fax`,`email`,`website`) VALUES ('$company','$address','$telephone','$fax','$email','$website') WHERE id=1");

header('Location: index.php');
?>