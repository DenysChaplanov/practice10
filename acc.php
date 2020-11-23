<?php
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$password = $_POST['password'];


	$mysql = new mysqli('localhost','root','','testdb');

	$result = $mysql->query("SELECT * FROM `users` WHERE `first_name` = '$first_name' AND 
		`last_name` = '$last_name' AND `password` = '$password'");

	$user = $result->fetch_assoc();
	if(count($user) == 0){
		echo "Такой пользователь не найден";
		exit();
	}
	
	setcookie('user', $user['first_name'], time() + 3600, "/");

	$mysql->close();
?>