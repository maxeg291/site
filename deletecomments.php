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
		<a href="tel:+79653691363" style="padding: 10px 5% 10px;color:blue;"> +7 (965) 369 13 63 </a>
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
  	<form action="deletecommentsscript.php" method="POST">
    <p>Введите ID отзыва, который вы хотите удалить:<input type="text" name="id" required></p>
   <input type="submit" value="Подтвердить">
   </form>
 </body>
</html>