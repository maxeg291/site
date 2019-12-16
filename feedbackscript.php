<?php
  $comment = filter_var(trim($_POST['comment']),
  FILTER_SANITIZE_STRING);
  $login=$_COOKIE['login'];
  $email=$_COOKIE['email'];
  $date=date("Y-m-d");
  $mysql = new mysqli('localhost','root','','site');
  $mysql->query("INSERT INTO `comments` (`comment`,`login`,`email`,`date`)
  VALUES('$comment', '$login', '$email', '$date')"); 
 
  $mysql->close();
  header('Location:feedback.php');
?>