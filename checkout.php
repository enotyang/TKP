<div class="page">
<?php 
$title="Корзина";
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
?>
<html>
<head>
<title>Корзина</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		  <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/myCart.js"></script>
<link rel="stylesheet" href="css/style.css">

		
</head>

<body onLoad="showMyCart()">
	<div class="ckeckout">
		<div class="container">
			<div class="ckeck-top heading">
			<br>
				<h2>Корзина</h2>
			</div>
			<div class="ckeckout-top">
			<div class="cart-items">

				
			<div class="in-check" id ="in-check">
				<ul class="unit">
					<li><span>Свеча</span></li>
					<li><span>Название</span></li>		
					<li><span>Цена</span></li>
					<li><span>Место</span></li>
					<li> </li>
					<div class="clearfix"> </div>
				</ul>
				
				
			</div>
			</div>  
		 </div>
		</div>
	</div>
</body>
<?php 
require __DIR__ . '/footer.php';
 ?>
</html>
</div>
