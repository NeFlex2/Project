<?php
$mysql = mysqli_connect('localhost', 'root', 'root', 'computers');
$computers = mysqli_query($mysql, "SELECT * FROM `computers`");
$computers = mysqli_fetch_assoc($computers);
print_r($computers);
 ?>
 <!DOCTYPE html>
 <html lang = "ru">
 <head>
   <meta charset="utf-8">
   </head>
   <body>
     <table>
 <form action = "Profile.php" method = "post">
   <button type = "submit">Личный кабинет</button>
 </form>
 <form action = "http://localhost:81/functional/OpenPage.php" method = "">
   <button type = "">Ассортимент</button>
 </form>
 <form action = "Bucket.php" method = "post">
   <button type = "">Корзина</button>
 </form>
 <form action = "http://localhost:81/StartMenu.html" method = "post">
 <button type = "">Выход</button>
 </form>
</table>
  </body>
  </html>
