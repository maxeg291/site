<html>
 <head>
  <meta charset="utf-8">
  <title> Регистрация </title>
  <link rel="stylesheet" href="authstyle.css">
 </head>
 <body>
  <div class="header">
   <h1> Kengurumi </h1>
  </div>
  <div class="menu">
   <p align=center><a href="life.php" style="padding: 10px 5% 10px;">Вернуться на главную страницу</a></p>
  </div>
  <div class="main" style="text-align:center">
   <h3>Регистрация</h3>
   <form action="regscript.php" method="POST">
    <p>E-Mail: <input type="email" name="email" required></p>
    <p>Логин: <input type="text" name="login" required><br>
    <p>Пароль: <input type="password" name="password" required pattern="\S{6,}"
     title="Пароль должен содержать не менее 6 символов"></p>
    <p>Подтверждение пароля: <input type="password" name="confpass"></p>
    <input type="submit" value="Зарегистрироваться">
   </form> 
   <p> Зарегистрированы? <a href="auth.php" style="color:#81BEF7;"> Войти </a> </p>
  </div>
 </body>
</html>
