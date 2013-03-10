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
	<h3>Регистрационна форма</h3>
		<form action="process_registration.php" method="post">
			Потребителско име: <input type="text" name="username" /><br />
			Трите Имена: <input type="text" name="fullname" /><br />
			Парола: <input type="password" name="password" /><br />
			E-mail: <input type="text" name="email" /><br />
			Администратор: <input type="checkbox" name="admin" value="1"/><br />
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>