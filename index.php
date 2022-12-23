<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<div class="page">         
<?php 
$title="Главная";
require __DIR__ . '/header.php'; // подключаем шапку проекта
?>



<div class="container carousel">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/banner2.png" alt="Первый слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner.png" alt="Второй слайд">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Назад</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Вперед</span>
  </a>
</div>
</div>
<br>

<div class="container mt-4">
<form action="search.php?go" method="POST">
	<div class="input-group mb-3">
		<input type="text"  name="search" class="form-control" placeholder="Поиск" aria-label="Начните вводить" aria-describedby="basic-addon2">
		<button type="submit" name="btn_search" class="btn btn-outline-dark input-group-text">Найти</button>
	</div>			
</form>
</div>	
      
      <div class="container col-sm-9">
      <div class="row">
      <br>
        <h2 class="catalog-title">Каталог</h2>
    </div>
    </div>
	
	
      <div class="container cards_list">
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/myCart.js"></script>
<div class="container mt-4">
<div class="row">
</head>
<body>

<?php 
$dbUser = 'root';
$dbName = 'shem';
$dbPass = '';
$mysqli = new mysqli('127.0.0.1', $dbUser, $dbPass, $dbName);
$query = "set names utf8";
$mysqli->query($query);
$query = "select * from products";
$results = $mysqli->query($query);
while($row = $results->fetch_assoc()){
	echo '

<div class="col-sm-3">
<div class="product-item">
  <a href="card.php?type=product&id='.$row["id"].'"> <img src="'.$row["img"].'"></a>
  <div class="product-list">
    <h3><a class="card-title" href="card.php?type=product&id='.$row["id"].'"> '.$row["title"].'</a></h3>
	<h6>'.$row["place"].'</h6>
      <h6><span class="price">₽ '.$row["price"].'</span>
      <a href="" class="button" onClick = "addToCart('.$row["id"].'); return false;">В корзину</a>
  </div>
</div>
</div>';}

?>
      <div class="container col-sm-9">
      <div class="row">
      <br>
        <h2 class="tg-title">Telegram Bot</h2>
    </div>
    </div>
    <p class="text-qr">Не можете определиться свечу с каким ароматом выбрать? 
        Воспользуйтесь нашим ботом, он поможет вам с выбором!</p>
    <div class="container col-sm-4">
      <div class="row">
      <img class="qr" src="images/qr.png">
    </div>
    </div>

    <div class="container col-sm-9">
      <div class="row">
      <a href="https://t.me/shem_store_bot" class="buttonQr">Перейти</a>
    </div>
    </div>

</div>

</div>
</div>
<?php 
require __DIR__ . '/footer.php';
 ?>
</body>
</html>