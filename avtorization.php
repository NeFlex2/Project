<?php

  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);
  $mysql = new mysqli('localhost', 'root', 'root', 'registred-people');
  $result = mysqli_query($connection,"SELECT * FROM `registred-people` WHERE `Login` = '$login' AND `Pass` = '$pass'");

  $users = mysqli_fetch_assoc($result);
  if(count($users) == 0)
  {
    echo "Пользователь не найден";
    exit();
  }
  else
  {
    setcookie('user' , $users['Name'], time() + 1800, "/");


  }

  $mysql =mysqli_close($connection);

  header('Location: /OpenPage.php')
   ?>
