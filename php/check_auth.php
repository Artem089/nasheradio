<?php
// Установка времени жизни сессии на 20 секунд
session_set_cookie_params(20);

// Запуск сессии
session_start();

// Проверка наличия идентификатора пользователя в сессии
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Подключение к базе данных
$host = 'localhost';
$user = 'CryptoBabe';
$password = '123123';
$db_name = 'register-bd';
$link = mysqli_connect($host, $user, $password, $db_name);

// Получение данных пользователя
$user_id = $_SESSION['user_id'];
$query = "SELECT `login` FROM `users` WHERE `id` = '$user_id'";
$result = mysqli_query($link, $query);
$user = mysqli_fetch_assoc($result);
$user_login = $user['login'];
?>
<!-- Вывод страницы с подкастами -->
<!DOCTYPE html>
<html>
<head>
    <title>Подкасты</title>
</head>
<body>

</body>
</html>
