<?php session_start(); ?>
<html lang="ru">
<head>
<link rel="shortcut icon" href="#">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="js/myCart.js"></script>
	<meta content="text/html; charset=utf-8">
</head>
<body>

<nav class="navbar navbar-expend-md navbar-dark bg-dark sticky-top">
	<div class="container-fluid">
			<a href="index.php" class="navbar-brand"><img src="images/logo_2.svg" class="d-inline-block align-bottom"></a>
		<div class="float-right">	
		<div class="row mx-md-n">
		<div class="pr-4">
			
	</div>	
<div class="pr-5">
<div class="pr-5">
<div class="pr-4">
<a href="checkout.php"><img class="pad"  height="60px" src="images/bag-icon.svg" ></a> 
<?php if(!isset($_SESSION['user'])) { ?>
<a href="login.php"><img class="pad"  height="60px" src="images/login-icon.svg" ></a> 
<?php } else if(isset($_SESSION['user'])) {?>
<a href="lk.php"><img class="pad"  height="60px" src="images/user-icon.svg" ></a> 
<a href="logout.php"><img class="pad"  height="60px" src="images/logout-icon.svg" ></a> 
	
<?php } ?>
</div>	
</div>
		</div>	
		</div>
		</div>
	</div>
</nav>

</body>
</html>