<?php
// Подключение к базе данных
$host = 'localhost';
$user = 'a0817338_CrybtoBabe';
$password = '123123';
$db_name = 'a0817338_register-bd';
$link = mysqli_connect($host, $user, $password, $db_name);

// Обработка данных из формы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Проверка на заполнение всех полей
    if (empty($_POST['login']) || empty($_POST['password'])) {
        $error_msg = 'Заполните все поля';
    } else {
        $login = $_POST['login'];
        $password = md5($_POST['password']);

        echo "Password: ";
        echo $password;

        // Поиск пользователя в базе данных
        $query = "SELECT * FROM `users` WHERE `login` ='$login'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            // Проверка пароля
            if ($password == $user['password']) {
                echo "Login success!";
                // Сохранение идентификатора пользователя в сессии
                session_start();
                $_SESSION['user_id'] = $user['id'];
            
                // Перенаправление на страницу с подкастами
                header('Location: podcasts.php');
                exit;
            } else {
                $error_msg = 'Неправильный логин или пароль';
                echo "Login failed!";
            }        
        } else {
            $error_msg = 'Неправильный логин или пароль';
        }
    }
}
?>
<!-- Вывод формы авторизации -->
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
    <title>Авторизация</title>
</head>
<body>
<div class="container-fluid">
  <div class="row justify-content-center mt-5">
    <div class="col-lg-4 col-md-6 col-sm-8">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title text-center mb-4">Авторизация</h1>
          <?php if (isset($error_msg)) echo "<div class='alert alert-danger'>$error_msg</div>"; ?>
          <form method="post">
            <div class="form-group">
              <label for="login">Логин</label>
              <input type="text" class="form-control" id="login" name="login" required>
            </div>
            <div class="form-group">
              <label for="password">Пароль</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Войти</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
