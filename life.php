<html>
<head>
	<meta charset="utf-8">
	<title> Kengurumi </title>
	<link rel="stylesheet" href="lifestyle.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
	<div class="top" align="center">
		<p><img src="images/logo.png" alt="Логотип" style="width:100px; margin-top:40px;">
		<a rel="nofollow" href="https://www.instagram.com/kengyrumi/" style="padding: 10px 5% 10px;">
			<img src="images\instalogo.png" alt="instagram"style="width:20px; margin-top:40px;"></a>
		<a rel="nofollow" href="https://vk.com/kengyrumi" style="padding: 10px 5% 10px;">
			<img src="images\vklogo.png" alt="vk" style="width:20px;"></a>
		<a href="tel:+79653691363" style="padding: 10px 5% 10px;"> +7 (965) 369 13 63 </a>
		<a href="basket.php" style="padding: 10px 5% 10px;">
			<img src="images\basketimg.png" style="width:20px;"></a></p>
	</div>
	<h1 align="center"> Life </h1>
	<div class="menu" align=center>
   		<?php if($_COOKIE['login']==''): ?>
   			<a href="auth.php" style="padding: 10px 5% 10px;">Зарегистрироваться/Войти</a>
   			<?php elseif(($_COOKIE['login']!='') && ($_COOKIE['admin']==1)): ?>
   				<div width="20px"> Вы зашли под именем <?=$_COOKIE['login']?> как администратор. <a href="exit.php"> Выйти </a></div>
   			<?php else: ?>
   				<div width="20px"> Вы зашли под именем <?=$_COOKIE['login']?>. <a href="exit.php"> Выйти </a></div>
   		<?php endif; ?>
       	<a href="life.php" style="padding: 10px 5% 10px;">Life</a> 
	   	<a href="catalog.php" style="padding: 10px 5% 10px;"> Модели и размеры </a>
	   	<a href="feedback.php" style="padding: 10px 5% 10px;"> Отзывы </a>
	   	<a href="order.php" style="padding: 10px 5% 10px;"> Оформить заказ</a>
  	</div>
	<div class="content">
		<h2>Здесь Вы сможете больше узнать о жизни нашего магазина</h2>
		<?php if($_COOKIE['admin']==1):?>
			 <form action="addnews.php" method="POST" enctype="multipart/form-data" align="center">
			<p> Заголовок новости:<input type='text' name='newsheader'></p>
   			<label for="newstext">Текст новости:</label>
   			<textarea name="newstext" cols="80" rows="7"  required></textarea>
   			<p>Фото: <input type="file" name="photo"></p>
   			<input type="submit" value="Добавить новость">
   			</form>
			<div align=center><a href='deletenews.php'>Удалить новость</a></div>
		<?php endif; ?>
		<?php
  
  $mysql = new mysqli('localhost','root','','site');
  $query ="SELECT `photo`,`newstext` FROM `news`";
 
  $result = mysqli_query($mysql, $query); 
  if($result)
   $rows = "";
    while($rows = $result->fetch_assoc()){
		echo $rows["newsheader"];
		echo $rows["newstext"]."<br/>";
		echo $rows["photo"];				
	}
    mysqli_free_result($result);
mysqli_close($mysql);
?>
	</div>
</body>
</html>
