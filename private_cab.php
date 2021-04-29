<!DOCTYPE html>
<html lang = "ru">
<style>
a{
  font-size: 30px;
  font-weight: bold;
  color: #000;
}
</style>
<head>
  <meta charset = "UTF-8">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content = "ie=edge">
  <title>Форма регистрации</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
 <header class="hd">
   <nav class="menu">
       <a href="private_cab.php">Личный Кабинет</a> &emsp; &emsp; &emsp; &emsp;
       <a href="Assortment.php">Ассортимент</a> &emsp; &emsp; &emsp; &emsp;
       <a href="bucket.php">Корзина</a> &emsp; &emsp; &emsp; &emsp;
       <a href="exit.php">Выход</a> &emsp; &emsp; &emsp; &emsp;
   </nav><br><br>
</header>
<hr>
<h2 class="cabhead">Welcome <?=$_COOKIE['user']?> </h2>

<?php
$mysql = new mysqli('localhost', 'root', 'root', 'registred-people');
$name=$_COOKIE['user'];
$result=mysqli_query($connection,"SELECT * FROM `registred-people` WHERE `Name` = '$name' AND `Login` = '$login' AND `Pass` = '$pass' ");
$count=mysqli_fetch_assoc($result);

  echo  "<div id='cabinfo'>".
        "<h2 class='cabhead'>".'Login: '.$count['Login']."</h2>".
        "<h2 class='cabhead'>".'Name: '.$count['Name']."</h2>".
        "<h2 class='cabhead'>".'Password: '.$count['Pass']."</h2>".
        "</div>"
?>













</body>
</html>
