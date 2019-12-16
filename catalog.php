<html>
<head>
  <meta charset="utf-8">
  <title> Kengurumi </title>
  
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
  <h1 style="text-align:center;font-size:50px;color:red;font-family:segoe print;"> Модели и размеры </h1>
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
    <h3 style="color:brown;"><em> Цена на все модели до конца зимы 1990 рублей</em></h3>
    <h3> Таблица размеров </h3>
    <table style="text-align:center;">
      <tr><td>Рост</td><td>Размер</td></tr>
      <tr><td>125-135cм</td><td>XXS (7-10 лет)</td></tr>
      <tr><td>135-145cм</td><td>XS (11-13 лет)</td></tr>
      <tr><td>145-155cм</td><td>S</td></tr>
      <tr><td>155-165cм</td><td>М</td></tr>
      <tr><td>165-175cм</td><td>L</td></tr>
      <tr><td>175-185cм</td><td>XL</td></tr>
    </table>
    <?php 
    error_reporting(0);
    $mysql = new mysqli('localhost','root','','site');
  if($_COOKIE['admin']==1): ?>
    <p><a href="addmodel.php">Добавить модель</a></p>
    <p><a href="deletemodel.php">Удалить модель</a></p>
   <?php else: echo "";?>
   <?php endif; 
     $mysql->close();?>
<?php
$mysql = new mysqli('localhost','root','','site');
$query ="SELECT `photo`,`name` FROM `catalog`";
 
$result = mysqli_query($mysql, $query); 
if($result)
 $rows = "";
    while($rows = $result->fetch_assoc()){
		?>
		<div class='model'>
		<?php
    echo "<h3 style='font-family:segoe print;font-size:25px'>".$rows['name']."</h3>";
    echo "<br>";
		echo '<img src=\'data:image/jpg;base64,'.base64_encode($rows['photo']).'\' />';}
    mysqli_free_result($result);
    mysqli_close($mysql);
		?>
		</div>
 </body>
</html>