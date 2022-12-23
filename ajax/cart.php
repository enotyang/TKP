<div class="page">
<?php
session_start();
$dbUser = 'root';
$dbName = 'shem';
$dbPass = '';
$mysqli = new mysqli('127.0.0.1', $dbUser, $dbPass, $dbName);
$query = "set names utf8";
$mysqli->query($query);

$action = $_POST["action"];
if ($action == 'show'){
if (!(isset($_SESSION['cart']))){
echo ' У вас нет заказов';
exit;
};
$cart = $_SESSION['cart'];
if (count($cart) == 0){
echo 'У вас нет заказов';
exit;
}

echo '<ul class="unit">
					<li><span>Свеча</span></li>
					<li><span>Название</span></li>		
					<li><span>Цена</span></li>
					<li><span>Место</span></li>
					<li> </li>
					<div class="clearfix"> </div>
				</ul>';

for ($i = 0; $i < count($cart); $i++){
$idProduct = $cart[$i]["idProduct"];
$query = 'select * from products where id = '.$cart[$i]["idProduct"].'';
$results = $mysqli->query($query);
while($row = $results->fetch_assoc()){
echo'

<ul class="cart-header">
					<div class="close1"> </div>
						<li><a href="card.php?type=product&id='.$row["id"].'"><img class="img-responsive" src="'.$row["img"].'" style="width:100px; " ></a>
						</li>
						<li> <a class="name" href="card.php?type=product&id='.$row["id"].'"> <span class="name">'.$row["title"].'</span></a></li>
						<li><span class="cost">'.$row["price"].' ₽</span></li>
						<li><span class="creator">'.$row["place"].'</span></li>
						<br>
						<a href="" class="button cart-button" onClick = "delFromCart('.$row["id"].');">Удалить</a>
					<div class="clearfix"> </div>
				</ul>
';
}
}
}


if ($action == 'add'){
$cart = $_SESSION['cart'];
$id = $_POST['id'];
$newProduct["idProduct"] = $id;
$cart[count($cart)] = $newProduct;
$_SESSION['cart'] = $cart;
}

if($action == 'del'){
$id = $_POST["id"];
$newCart = array();
$cart = $_SESSION['cart'];
for ($i = 0; $i < count($cart); $i++){
$idProduct = $cart[$i]["idProduct"];
if($id != $idProduct){
$newCart[count($newCart)] = $cart[$i];
}
}
$_SESSION['cart'] = $newCart;
}
?>
<hr>
  <div class="text-center">
<a href="pay.php" class="btn btn-info center-block">КУПИТЬ</a>
  </div>

