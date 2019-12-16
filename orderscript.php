<?php
  $model = filter_var(trim($_POST['model']),
  FILTER_SANITIZE_STRING);
  $size = filter_var(trim($_POST['size']),
  FILTER_SANITIZE_STRING);
  $email = $_COOKIE['email'];
  $login = $_COOKIE['login'];
  $mysql = new mysqli('localhost','root','','site');
 
  $mysql->query("INSERT INTO `orders` (`model`,`size`,`email`,`login`)
  VALUES('$model','$size','$email','$login')"); 
 
  $mysql->close();
  echo  "<b> Спасибо за заказ! В ближайшее время мы свяжемся с Вами по электронной почте для уточнения деталей заказа </b><br/>";
  echo "<a href='life.php'>Вернутся</a>";
?>