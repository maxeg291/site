<?php
 $login = filter_var(trim($_POST['login']),
 FILTER_SANITIZE_STRING);
 $password = filter_var(trim($_POST['password']),
 FILTER_SANITIZE_STRING);

 $mysql = new mysqli('localhost','root','','site');
 
 $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");
 $user = $result->fetch_assoc();
 error_reporting(0);
 if(count($user) == 0) {
	 echo "Неверно введён логин и/или пароль!";
	 echo '<p><a href="auth.php">'."Повторить попытку".'</a></p>';
	 exit();
 } 
 setcookie('email', $user['email'], time() + 28800, "/");
 setcookie('login', $user['login'], time() + 28800, "/");
 setcookie('admin', $user['admin'], time() + 28800, "/");
 $mysql->close();
 header('Location:life.php');
?>