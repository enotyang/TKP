<div class="page">  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">     
<?php
$id = $_GET["id"];
?>
<?php 
$title="Карточка товара"; // Из бд взять название!!!!!!!!!!!!!!!!!
require __DIR__ . '/header.php'; // подключаем шапку проекта
?>
<div class="container mt-4">
<div class="row">
<a href="#" onclick="history.back();return false;" class="history-back"><img src="images/arrow1.png"></a>

<?php
require "db.php"; // подключаем файл для соединения с БД
$dbUser = 'root';
$dbName = 'shem';
$dbPass = '';
$mysqli = new mysqli('127.0.0.1', $dbUser, $dbPass, $dbName);
$query = "set names utf8";
$mysqli->query($query);
$query = "SELECT * FROM products WHERE id=$id";
$results = $mysqli->query($query);
$row = $results->fetch_assoc()

?>

<br>

<link rel="stylesheet" href="css/product.css">
<section class="product">
	<div class="product__photo">
		<div class="photo-container">
			<div class="photo-main">
				<img class="img-responsive2" style="max-width: 60%" ; src="<?php echo $row["img"]; ?>">
			</div>
			
		</div>
	</div>
	<div class="product__info">
		<div class="title">
			<h1 class="tag-card"><?php echo $row["title"]; ?></h1>
			<h4><?php echo $row["place"]; ?></h4>
		</div>
		<div class="price">
			₽ <span><?php echo $row["price"] ?></span>
		</div>

		<div class="description">
			<h4>ОПИСАНИЕ</h4>
				<p1><?php echo $row["description"]; ?></p1>
		</div>
		<br>
		<a href="pay.php" class="btn btn-info center-block ">КУПИТЬ</a>
		<br>
		<br>
	</div>
</section>
</div>
</div>

<?php 
require __DIR__ . '/footer.php';
 ?>
</div>
</div>