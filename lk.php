<?php 
$title="Личный кабинет";
require"db.php";
require "header.php"?>

<?php 
$user = R::findOne('users', 'id=?', array($_SESSION['user']->id));

?>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> 

</head>
<body>

<div class="container mt-4">
			<div class="ckeck-top heading">
				<h2>Личный кабинет</h2>
			</div>
</div>

      <div class="container">
<?php 
echo '<div class="ckeckout">
		<div class="container">

			<div class="cart-items">
		
			<ul class="unit">
					
					<li><span>Дата заказа</span></li>		
					<li><span>Статус</span></li>
					<li><span>Количество</span></li>
					<li><span>Стоимость</span></li>
					</ul>
				
					<span>'.$user["name"].', Вы еще не совершали покупок в нашем магазине<span> 
					</div>
		</div>
	</div>
				';

?><br>
<div class="ckeck-top heading">
				
<a href="index.php" class="btn btn-dark btn-lk">Перейти в каталог</a>   </div> </div>
<?php require "footer.php" ?>
</body>
</html>