<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90)
{
  echo "Недопустимая длина логина";
  exit();
}
else if (mb_strlen($pass) < 3 || mb_strlen($pass) > 10)
{
  echo "Недопустимая длина пароля";
  exit();
}

$mysql = new mysqli('localhost', 'root', 'root', 'registred-people');
$mysql -> query("INSERT INTO `registred-people` (`Name`,`Login`,`Pass`)
VALUES('$name', '$login', '$pass')");

$mysql -> close();
header('Location: /index.php');
 ?>
