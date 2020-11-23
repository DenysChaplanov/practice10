<?php
	setcookie('user', $user['first_name'], time() - 3600, "/");
	header('Location: /practise10/register.php');
?>