<!DOCTYPE html>
<html lang = "ru">
<style>
a{
  font-size: 30px;
  font-weight: bold;
  color: #000;
}
body{
  background: #000 url(img/RegBackground.jpg);
}
button {
  background-color: #008CBA; /* Green */
  border: 2px solid #555555;

  color: black;
  padding: 15px 32px;

  text-align: center;
  text-decoration: none;
  display: inline-block;

  font-size: 16px;
  font-weight: bold;

}
button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}
img{
  width: 250px;
  height: 250px;
  border: none;
}
</style>
<head>
  <script src="js/jquery-1.11.0,min.js"></script>
  <script src="test.js"></script>
  <nav class="menu">
      <a href="private_cab.php">Личный Кабинет</a> &emsp; &emsp; &emsp; &emsp;
      <a href="Assortment.php">Ассортимент</a> &emsp; &emsp; &emsp; &emsp;
      <a href="cart.php">Корзина</a> &emsp; &emsp; &emsp; &emsp;
      <a href="exit.php">Выход</a> &emsp; &emsp; &emsp; &emsp;
      <a href="test.js">Тест корзины</a> &emsp; &emsp; &emsp; &emsp;
  </nav>
<body>
 <br><br><br><form action = "Computers.php" method = "post">
   <button type = ""><br><br>Компьютеры<br><br></button>
 </form>
 <br><img class="" src="img/комп.jpg" alt = "" /><br>
 <br><form action = "Telephones.php" method = "post">
   <button type = ""><br><br>Мобильные телефоны<br><br></button>
 </form>
 &emsp;<br><img class="" src="img/телефон.jpg" alt = "" /><br>
 <br><form action = "consumerElectronics.php" method = "post">
   <button type = ""><br><br>Бытовая электроника<br><br></button>
 </form>
 &emsp;<br><img class="" src="img/стиралка.jpg" alt = "" /><br>
 <br><form action = "Accessories.php" method = "post">
   <button type = ""><br><br>Аксессуары<br><br></button>
 </form>
 &emsp;<br><img class="" src="img/наушники.jpg" alt = "" />
</body>
</head>
