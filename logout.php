<?php 
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД

// Производим выход пользователя
unset($_SESSION['user']);

// Редирект на главную страницу
header('Location: index.php');

?>