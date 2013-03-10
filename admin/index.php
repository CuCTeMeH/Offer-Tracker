<?php
session_start();
if(session_is_registered("admin")!=1){
header("location:../index.php");
}
?>
<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Регистрационна форма - Мастер ООД</title>
	</head>
	<body>
	<h3>Администраторски панел</h3>
<h3><a href="change_master.php">Промяна на данни за фирмата (Мастер ООД)</a></h3>
<h3><a href="regform.php">Добавяне на нов потребител</a></h3>
<h3><a href="query.php">Справки за издадени оферти</a></h3>
<h3><a href="../form.php">Създаване на нова оферта</a></h3>
	</body>
</html>