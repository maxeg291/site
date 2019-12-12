<html>
 <head>
  <meta charset="utf-8">
  <title> Вход </title>
  <link rel="stylesheet" href="authstyle.css">
 </head>
 <body>
  <div class="header">
   <h1> Kengurumi </h1>
  </div>
  <div class="menu">
   <p align=center> <a href="main.php" style="padding: 10px 5% 10px;">Вернуться на главную страницу</a></p>
  </div>
  <div class="main" style="text-align:center">
   <form action="authscript.php" method="post">
    <p>Ваш логин: <input type="text" name="login" required><br></p>
    <p>Ваш пароль: <input type="password" name="password" required><br></p>
    <input type="submit" name="submit">
   </form>
   <p> Еще не зарегистрированы? <a href="reg.php"> Зарегистрироваться </a></p>
  </div>
 </body>
</html>