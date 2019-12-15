<?php
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);
  
  $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
 $mysql = new mysqli('localhost','root','','site');
 
 $mysql->query("INSERT INTO `catalog` (`name`,`photo`)
 VALUES('$name','$photo')"); 
 
 $mysql->close();
 header('Location:catalog.php');
?>