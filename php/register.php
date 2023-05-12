<?php
// Подключение к базе данных
$host = 'localhost';
$user = 'a0817338_CrybtoBabe';
$password = '123123';
$db_name = 'a0817338_register-bd';
$link = mysqli_connect($host, $user, $password, $db_name);

// Обработка данных из формы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Проверка соответствия паролей
    if ($password != $confirm_password) {
        $error_msg = 'Пароли не совпадают';
    } else {
        // Проверка на уже существующий логин и email
        $query = "SELECT * FROM `users` WHERE `login`='$login' OR `email`='$email'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) > 0) {
            $error_msg = 'Пользователь с таким логином или email уже зарегистрирован';
        } else {
            // Шифрование пароля
            $password = md5($password);

            // Добавление данных в базу данных
            $query = "INSERT INTO `users` (`login`, `email`, `password`) VALUES ('$login', '$email', '$password')";
            mysqli_query($link, $query);

            // Перенаправление на страницу авторизации
            header('Location: login.php');
            exit;
        }
    }
}
?>
<!-- Вывод формы регистрации -->
<!DOCTYPE html>
<html>
<head>
    	<!-- Общие стили -->
	<link rel="stylesheet" href="css/style.css" />
	<!-- Бутсрап -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

	<!-- Шрифты -->
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet" />

	<!-- JQuery -->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css" />
    <title>Регистрация</title>
</head>
<body>
<div class="container-fluid">
  <div class="row justify-content-center align-items-center mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title text-center mb-4">Регистрация</h1>
          <?php if (isset($error_msg)) echo "<div class='alert alert-danger'>$error_msg</div>"; ?>
          <form method="post">
            <div class="form-group">
              <label for="login">Логин</label>
              <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Пароль</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
              <label for="confirm_password">Подтверждение пароля</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-2">Зарегистрироваться</button>
            <a href="/php/login.php" class="btn btn-primary mt-2 mx-3">Авторизация</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
