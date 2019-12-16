<?php
  $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
  $confpass = filter_var(trim($_POST['confpass']),FILTER_SANITIZE_STRING);
  
  if ($password!=$confpass) {
	echo "Пароль и подтверждение пароля не совпадают";
	echo '<p><a href="reg.php">'."Попробуйте снова".'</a></p>';
    exit();
  }
  $mysql = new mysqli('localhost','root','','site');
  $query ="SELECT `login` FROM `users`";
  $result = mysqli_query($mysql, $query); 
  if($result)
   $rows = "";
    while($rows = $result->fetch_assoc()){
	if ($login==$rows["login"]) {
	  echo "Пользователь с таким логином уже существует";
	  echo '<p><a href="reg.php">'."Попробуйте снова".'</a></p>';
	  exit();	
	}
	}
    mysqli_free_result($result);
    mysqli_close($mysql);
 $link = new mysqli('localhost','root','','site');
 if (!$mysql) {
 die('Could not connect: ' . mysql_error());
}
else{}

 $mysql=("INSERT INTO `users` (`email`,`login`,`password`)
 VALUES('$email', '$login', '$password')");
 if (mysqli_query($link,$mysql)) {
   header('Location:auth.php');
} else {
  echo "Ошибка: " . $mysql . "<br>" . mysqli_error($link);
}
 $link->close();
 
?>