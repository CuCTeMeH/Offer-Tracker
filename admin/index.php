<?php
session_start();
if(session_is_registered("admin")!=1){
header("location:../index.php");
}
?>
<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Registration Form</title>
	</head>
	<body>
	<h3>Admin Panel</h3>
<h3><a href="change_master.php">Change company data</a></h3>
<h3><a href="regform.php">Add user</a></h3>
<h3><a href="query.php">Offers Report</a></h3>
<h3><a href="../form.php">Create new offer</a></h3>
	</body>
</html>