<?php

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$id_role = $_POST['id_role'];
	$password = $_POST['password'];

	if(mb_strlen($id_role) < 1 || mb_strlen($id_role) > 2) {
		echo "Недопустимая длина (1-админ, 2-пользователь)";
		exit();
	} else if(mb_strlen($first_name) < 2 || mb_strlen($first_name) > 30) {
		echo "Недопустимая длина имени";
		exit();
	} else if(mb_strlen($last_name) < 2 || mb_strlen($last_name) > 30) {
		echo "Недопустимая длина фамилии";
		exit();
	} else if(mb_strlen($password) < 2 || mb_strlen($password) > 6) {
		echo "Недопустимая длина пароля (от 2 до 6 символов)";
		exit();
	}

	$mysql = new mysqli('localhost','root','','testdb');
	$mysql ->query("INSERT INTO `users` (`first_name`, `last_name`, `id_role`, `password`) 
	VALUES ('$first_name', '$last_name', '$id_role', '$password')");

	$mysql->close();

?>