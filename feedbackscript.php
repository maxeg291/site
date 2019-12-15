<?php
  $comment = filter_var(trim($_POST['comment']),
  FILTER_SANITIZE_STRING);
  $login=$_COOKIE['login'];
  $email=$_COOKIE['email'];
  $mysql = new mysqli('localhost','root','','site');
  $mysql->query("INSERT INTO `comments` (`comment`,`login`,`email`)
  VALUES('$comment', '$login', '$email')"); 
 
  $mysql->close();
  header('Location:feedback.php');
?>