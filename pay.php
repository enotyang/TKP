<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<div class="page">         
<?php 
$title="Оплата";
require __DIR__ . '/header.php'; // подключаем шапку проекта
?>
<form class="row g-3 pay">
<h3>Введите данные для покупки</h3>
<div class="col-12 num">
    <label for="inputAddress" class="form-label">Номер карты</label>
    <input type="number" class="form-control" id="inputAddress" placeholder="Введите номер карты">
  </div>
  <div class="col-md-6 cvv">
    <label for="inputEmail4" class="form-label">CVV/CVC</label>
    <input type="password" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6 date">
    <label for="inputPassword4" class="form-label">Срок действия</label>
    <input type="date" class="form-control" id="inputPassword4">
  </div>
  <h3 class="address">Введите адрес доставки</h3>
<div class="col-12 num">
    <input type="text" class="form-control" id="inputAddress" placeholder="Регион, населенный пункт, дом, квартира">
  </div>
  <div class="col-12 btn-pay">
    <a href="" class="buttonBuy">Купить</a>
    <a href="index.php" class="buttonStop">Отменить</a>
  </div>
  </div>
</form>
<?php 
require __DIR__ . '/footer.php';
 ?>
 

</div>
</div>
</div>
</body>
</html>