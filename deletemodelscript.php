<?php
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);
  $mysql = new mysqli('localhost','root','','site');
  $mysql->query("DELETE FROM `catalog` WHERE `name`='$name'");
  $mysql->close();
  header('Location:catalog.php');
?>