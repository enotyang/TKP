
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<div class="page">
<?php 
$title="Форма авторизации"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД
// Создаем переменную для сбора данных от пользователя по методу POST
$data = $_POST;

// Пользователь нажимает на кнопку "Авторизоваться" и код начинает выполняться
if(isset($data['do_login'])) { 

 // Создаем массив для сбора ошибок
 $errors = array();

 // Проводим поиск пользователей в таблице users
 $user = R::findOne('users', 'login = ?', array($data['login']));

 if($user) {
 	// Если логин существует, тогда проверяем пароль
 	if(password_verify($data['password'], $user->password)) {

 		// Все верно, пускаем пользователя
 		$_SESSION['user'] = $user;
 		
 		// Редирект на главную страницу
                header('Location: index.php');

 	} else {
    $errors[] = 'Пароль неверно введен!';


 	}

 } else {
 	$errors[] = 'Пользователь с таким логином не найден!';
 }

if(!empty($errors)) {

		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';

	}
}
?>
<div class="container mt-4">
		<div class="row">
			<div class="col">
			<div style="text-align: center;">
		<!-- Форма авторизации -->
		<h2 class="title-login">Форма авторизации</h2>
		<br>
		<form action="login.php" method="post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" required><br>
			<input type="password" class="form-control" name="password" id="pass" placeholder="Введите пароль" required><br>
			
			<button class="btn btn-info" name="do_login" type="submit">Авторизоваться</button>
			
			<br>
			<br>
			Ещё нет аккаунта? <a class="link-sign-up" href="signup.php">Зарегистрироваться</a></p1>
			</div>
		</form>
		<br>

			</div>
		</div>
	</div>
	<?php 
require __DIR__ . '/footer.php';
 ?>
 </div>
