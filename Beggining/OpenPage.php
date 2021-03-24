<!DOCTYPE html>
<html lang = "ru">
<head>
<body>
  <?php

  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);

  $mysql = new mysqli('localhost', 'root', 'root', 'registred-people');

  $result = $mysql->query("SELECT * FROM `registred-people` WHERE `Login` = '$login' AND `Pass` = '$pass'");

  $users = $result->fetch_assoc();
  if(count($users) == 0)
  {
    echo "Пользователь не найден";
    exit();
  }
  else
  {
    setcookie('user' , $users['Name'], time() + 1800, "/");
  }

  $mysql -> close();

   ?>
   <title> Добро пожаловать! </title>
   <form action = "Profile.php" method = "post">
     <button type = "submit">Личный кабинет</button>
   </form>
   <form action = "Assortment.php" method = "">
     <button type = "">Ассортимент</button>
   </form>
   <form action = "Bucket.php" method = "post">
     <button type = "">Корзина</button>
   </form>
   <form action = "http://localhost:81/StartMenu.html" method = "post">
   <button type = "">Выход</button>
 </form>
 <form action = "Computers.php" method = "post">
   <button type = ""><br><br>Компьютеры<br><br></button>
 </form>
 <form action = "Telephones.php" method = "post">
   <button type = ""><br><br>Мобильные телефоны<br><br></button>
 </form>
</body>
</head>
