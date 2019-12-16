<html>
<head>
  <meta charset="utf-8">
  <title> Kengurumi </title>
  <link rel="stylesheet" href="catalogstyle.css">
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
  <h1 style="text-align:center;font-size:50px;color:red;font-family:segoe print;"> Оформить заказ </h1>
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
     error_reporting(0);
     if($_COOKIE['login'] == ''):
     ?>
   <h3 style="color:red;"><a href="auth.php" style="color:#81BEF7;">Войдите</a> или <a href="reg.php" style="color:#81BEF7;">зарегистрируйтесь</a>, чтобы оформить заказ!</p>
    <?php elseif(($_COOKIE['login']!='')&&($_COOKIE['admin']!=1)): ?>
  <h3> Таблица размеров </h3>
    <table style="text-align:center;">
      <tr><td style="color:red">Рост</td><td style="color:red">Размер</td></tr>
      <tr><td>125-135cм</td><td>XXS (7-10 лет)</td></tr>
      <tr><td>135-145cм</td><td>XS (11-13 лет)</td></tr>
      <tr><td>145-155cм</td><td>S</td></tr>
      <tr><td>155-165cм</td><td>М</td></tr>
      <tr><td>165-175cм</td><td>L</td></tr>
      <tr><td>175-185cм</td><td>XL</td></tr>
    </table>
   <p> Выберите модели, которые желаете приобрести, и их размеры </p>
   <form action="orderscript.php" method="POST" align='center'>
    <p>Модель: 
     <select name="model" size="1">
	 <?php
$mysql = new mysqli('localhost','root','','site');
$query ="SELECT `name` FROM `catalog`";
$result = mysqli_query($mysql, $query); 
if($result)
 $rows = "";
    while($rows = $result->fetch_assoc()){
		echo "<option value=".$rows['name'].">".$rows["name"]."</option>";
				
	}
    mysqli_free_result($result);
mysqli_close($mysql);
?>
     </select></p>
    <p>Размер: 
     <select name="size" size="1">
      <option value="XXS">XXS (7-10 лет)</option>
      <option value="XS">XS (11-13 лет)</option>
      <option value="S">S</option>
      <option value="M">M</option>
      <option value="L">L</option>
      <option value="XL">XL</option>
     </select></p>
    <input type="submit" value="Заказать">
   </form>
   <?php else: ?>
   <?php
  $mysql = new mysqli('localhost','root','','site');
  $query ="SELECT `id`,`model`,`size`,`email`,`login` FROM `orders`";
 
  $result = mysqli_query($mysql, $query); 
  if($result)
   $rows = "";
    while($rows = $result->fetch_assoc()){
    echo "<table>";
    echo "<tr>";
    echo "<td style='color:red'><b><em>".$rows["id"].")</em></b></td>";
    echo "<td><b>".$rows["login"].":</b></td>";
        echo "<td style='color:blue'><b>".$rows["model"]."</b></td>";
        echo "<td style='color:blue'><b>".$rows["size"]."</b></td>";
        echo "<td>".$rows["email"]."</td>";
    echo "</tr>"; 
        echo "</table>";        
  }
    mysqli_free_result($result);
mysqli_close($mysql);
?>
<a href="deleteorder.php">Удалить заказ</a>
<?php endif; ?>
  </div>
 </body>
</html>