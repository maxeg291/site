<?php
  $id = filter_var(trim($_POST['id']),
  FILTER_SANITIZE_STRING);
  
  $mysql = new mysqli('localhost','root','','site');
 
  $mysql->query("DELETE FROM `orders` WHERE `id`='$id'");
  $mysql->close();
  header('Location:order.php');
   
?>