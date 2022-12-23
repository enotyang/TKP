<?php 
$title="Поиск"; // название формы
require"db.php";
require "header.php";
?>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
<div class="row">
<a href="index.php"><img src="images/arrow1.png"></a>


<form action="search.php?go" method="POST">
	<div class="input-group mb-3">
		<input type="text"  name="search" class="form-control" placeholder="Поиск" aria-label="Начните вводить" aria-describedby="basic-addon2">
		<button type="submit" name="btn_search" class="btn btn-outline-dark input-group-text">Найти</button>
	</div>			
</form>

<div class="container mt-4">

<?php 
	$search=$_POST['search'];
	$dbUser = 'root';
$dbName = 'shem';
$dbPass = '';
	$connection = new mysqli('127.0.0.1', $dbUser, $dbPass, $dbName);
	if($connection->connect_error){
		die("Ошибка: " . $connection->connect_error);
	}
	if(isset($_POST['btn_search'])){
		if(!empty($search)){
			echo '⠀⠀⠀Ваш запрос: 	<a class="resear">' .$search. '	</a><br> <br><div class="row">';
			$query=$connection->query("SELECT * FROM `products` WHERE `title` LIKE '%$search%' OR `tag` LIKE '%$search%'" );
			if(mysqli_num_rows($query)>0){
				while($result=mysqli_fetch_assoc($query)){
					
						echo' 

<div class="col-sm-3">

<div class="product-item">
  <a href="card.php?type=product&id='.$result["id"].'"> <img src="'.$result["img"].'"></a>
  <div class="product-list">
    <h3><a class="card-title" href="card.php?type=product&id='.$result["id"].'"> '.$result["title"].'</a></h3>
	<h6>'.$result["place"].'</h6>
      <h6><span class="price">₽ '.$result["price"].'</span>
      <a href="" class="button" onClick = "addToCart('.$result["id"].'); return false;">В корзину</a>
  </div>
</div>
</div>';}
			}else{
				echo 'Ничего не найдено';
			}
	}else{
		echo 'Вы ничего не ввели';
	}		
}	
?>


</div>
</div></div></div>
<?php require "footer.php" ?>

</body>
</html>