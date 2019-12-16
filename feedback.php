<html>
<head>
  <meta charset="utf-8">
  <title> Kengurumi </title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
  <div class="top" align="center">
    <p><img src="images/logo.png" alt="Логотип" style="width:100px; margin-top:40px;">
    <a rel="nofollow" href="https://www.instagram.com/kengyrumi/" style="padding: 10px 5% 10px;width:30px">
      <img src="images\instalogo.png" alt="instagram"style="width:20px; margin-top:40px;"></a>
    <a rel="nofollow" href="https://vk.com/kengyrumi" style="padding: 10px 5% 10px;width:30px">
      <img src="images\vklogo.png" alt="vk" style="width:20px;"></a>
    <a href="tel:+79653691363" style="padding: 10px 5% 10px;"> +7 (965) 369 13 63 </a>
    <img src="images/logo.png" alt="Логотип" style="width:100px; margin-top:40px;"></p>
  </div>
  <div style="margin-left:475px;" >
    <pre style="font-size:15px;font-family:arial;"> Мы в Instagram             Мы во Вконтакте                             Позвонить нам</pre>
  </div>
  <h1 style="text-align:center;font-size:50px;color:red;font-family:segoe print;"> Отзывы </h1>
  <div class="menu" align=center style="background-color:pink;width:100%;height:15%;margin-left:0px;font-size:20px;">
      <?php if($_COOKIE['login']==''): ?>
        <a href="auth.php" style="padding: 10px 5% 10px;">Зарегистрироваться/Войти</a>
        <?php elseif(($_COOKIE['login']!='') && ($_COOKIE['admin']==1)): ?>
          <p> Вы зашли под именем <?=$_COOKIE['login']?> как администратор. <a href="exit.php"> Выйти </a></p>
        <?php else: ?>
          <div width="20px" style="padding-bottom:5px"> Вы зашли под именем <?=$_COOKIE['login']?>. <a href="exit.php"> Выйти </a></div>
      <?php endif; ?>
        <a href="life.php" style="padding: 10px 5% 10px;">Life</a> 
      <a href="catalog.php" style="padding: 10px 5% 10px;"> Модели и размеры </a>
      <a href="feedback.php" style="padding: 10px 5% 10px;"> Отзывы </a>
      <a href="order.php" style="padding: 10px 5% 10px;"> Оформить заказ</a>
    </div>
    <div class="content">
  	 
  	<?php
  $comment = filter_var(trim($_POST['comment']),
  FILTER_SANITIZE_STRING);
  $login=$_COOKIE['login'];
  $email=$_COOKIE['email'];
  
  $mysql = new mysqli('localhost','root','','site');
  $query ="SELECT `login`,`comment`,`date` FROM `comments`";
 
  $result = mysqli_query($mysql, $query); 
  if($result)
   $rows = "";
    while($rows = $result->fetch_assoc()){
		echo "<table>";
		echo "<tr>";
		echo "<td>Отзыв <b>".$rows["login"]." </b> от <em>".$rows["date"].":</em></td>";
        echo "<td>".$rows["comment"]."</td>";
		echo "</tr>"; 
    echo "<tr></tr>";
        echo "</table>";				
	}
    mysqli_free_result($result);
mysqli_close($mysql);
?>
<?php 
     error_reporting(0);
     if($_COOKIE['login'] == ''):
     ?>
   <h3 style="color:red;"><a href="auth.php" style="color:#81BEF7;">Войдите</a> или <a href="reg.php" style="color:#81BEF7;">зарегистрируйтесь</a>, чтобы оставить отзыв!</h3>
    <?php else: ?>
   <form action="feedbackscript.php" method="POST"  align=center>
   <label for="comment">Ваш отзыв:</label>
   <textarea name="comment" cols="60" rows="5"  required></textarea>
   <input type="submit" value="Оставить отзыв">
   </form>
  
  <?php 
    error_reporting(0);
   
    $mysql = new mysqli('localhost','root','','site');
	
	if($_COOKIE['admin']==1):
    ?>
    <p><a href="deletecomments.php" style="color:blue;">Удалить отзыв</a></p>
   <?php else: ?>
      <?php endif; 
	   $mysql->close();?> 
  <?php endif; ?>
  </div>
 </body>
</html>