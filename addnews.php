<?php
  $newsheader = filter_var(trim($_POST['newsheader']),
  FILTER_SANITIZE_STRING);
  $newstext = filter_var(trim($_POST['newstext']),
  FILTER_SANITIZE_STRING);
  $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
  $date=date("Y-m-d");
 $mysql = new mysqli('localhost','root','','site');
 
 $mysql->query("INSERT INTO `news` (`newsheader`,`newstext`,`photo`,`date`)
 VALUES('$newsheader','$newstext','$photo','$date')"); 
 
 $mysql->close();
 header('Location:life.php');
?>