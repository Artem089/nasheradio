<?php
include 'check_auth.php';
?>
<!-- Вывод страницы с подкастами -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Общие стили -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/musick.css">
    <!-- Бутсрап -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- JQuery -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">

    <!-- Слайдер Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Подключение стилей Slick Slider -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <title>Подкасты</title>
</head>
<body>

<header class="shadow-lg">
		<div class="pb-5 container">
			<div class="row justify-content-center">
				<div class="col-10 col-lg-8">
					<div class="d-flex flex-column flex-md-row justify-content-around align-items-center py-3">
						<div>
							<a href="index.html"><img src="../img/Logo.svg" alt="Логотип" /></a>
						</div>
						<div class="m-3 flex-grow-1 w-100">
							<audio controls class="w-100" style="min-width: 120px">
								<source src="http://nashe1.hostingradio.ru/nashe-128.mp3" type="audio/mpeg" />
								Ваш браузер не поддерживает проигрывание аудио.
							</audio>
						</div>
						<div>
							<img src="../img/16+.svg" alt="" />
						</div>
					</div>
					<hr />
					<div class="row row-cols-sm-2 row-cols-1 row-cols-lg-auto justify-content-around">
						<div class="nav-item text-center my-1">
							<a class="text-decoration-none text-dark fs-5" href="../index.html">Главная</a>
						</div>
						<div class="nav-item text-center my-1">
							<a class="text-decoration-none text-dark fs-5" href="../musik.html">Музыка</a>
						</div>
						<div class="nav-item text-center my-1">
							<a class="text-decoration-none text-dark fs-5" href="../novosti.html">Новости</a>
						</div>
						<div class="nav-item text-center my-1">
							<a class="text-decoration-none text-dark fs-5" href="podcasts.php">Подкасты</a>
						</div>
						<div class="nav-item text-center my-1">
							<a class="text-decoration-none text-dark fs-5" href="../vedushie.html">Ведущие</a>
						</div>
						<div class="nav-item text-center my-1">
							<p class="fs-5 mb-0">Привет <?php echo $user_login; ?></p>
						</div>
					</div>
					<hr />
				</div>
			</div>
		</div>
	</header>

<div class="section__title my-5" id="musika">
    <a href="../musik.html" class="section__title-text text-uppercase text-black-50 text-decoration-none">Подкасты</a>
</div>


<div class="container py-5">
    <div class="row d-flex flex-column">
        <div class="col d-flex flex-column align-items-baseline">
            <img src="../img/Подкаст1.jpg" class="img-fluid" alt="" />
            <h1 class="mx-5 fw-bold">Чиллософия</h1>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Узоры жизни</h2>
            <audio controls class="w-100 mt-3">
                <source src="../audio/Чиллософия/Узоры жизни.mp3">
            </audio>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Трансформация себя</h2>
            <audio controls class="w-100 mt-3">
                <source src="../audio/Чиллософия/Трансформация себя.mp3">
            </audio>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Мир — иллюзия</h2>
            <audio controls class="w-100 mt-3">
                <source src="../audio/Чиллософия/Мир — иллюзия.mp3">
            </audio>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Иллюзия счастья</h2>
            <audio controls class="w-100 mt-3">
                <source src="../audio/Чиллософия/Иллюзия счастья.mp3">
            </audio>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row d-flex flex-column">
        <div class="col d-flex flex-column align-items-baseline">
            <img src="../img/Подкаст2.jpg" class="img-fluid" alt="" />
            <h1 class="mx-5 fw-bold">Книги на миллион</h1>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Хитмейкеры наука популярности в эпоху развлечений. Успешный маркетолог</h2>
            <audio controls class="w-100 mt-3">
                <source
                    src="../audio/Книга_на_миллион/Хитмейкеры наука популярности в эпоху развлечений. Успешный маркетолог.mp3">
            </audio>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Кровь, пот и пиксели. Обратная сторона индустрии видеоигр. Разработка игр IT</h2>
            <audio controls class="w-100 mt-3">
                <source
                    src="../audio/Книга_на_миллион/Кровь, пот и пиксели. Обратная сторона индустрии видеоигр. Разработка игр IT.mp3">
            </audio>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Как работает экономика. Что Rolling Stones могут рассказать о свободном рынке.
                Преимущество рынок</h2>
            <audio controls class="w-100 mt-3">
                <source
                    src="../audio/Книга_на_миллион/Как работает экономика. Что Rolling Stones могут рассказать о свободном рынке. П.mp3">
            </audio>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Дзен и искусство ухода за мотоциклом. Роберт Пирсиг. Мудрые мысли</h2>
            <audio controls class="w-100 mt-3">
                <source
                    src="../audio/Книга_на_миллион/Дзен и искусство ухода за мотоциклом. Роберт Пирсиг. Мудрые мысли.mp3">
            </audio>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row d-flex flex-column">
        <div class="col d-flex flex-column align-items-baseline">
            <img src="../img/Подкаст3.jpg" class="img-fluid" alt="" />
            <h1 class="mx-5 fw-bold">Что-то не так</h1>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Управление репутацией _ Дмитрий Сидорин</h2>
            <audio controls class="w-100 mt-3">
                <source
                    src="../audio/Что-то не так/Управление репутацией _ Дмитрий Сидорин.mp3">
            </audio>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Маркетинг _ Илья Балахнин</h2>
            <audio controls class="w-100 mt-3">
                <source
                    src="../audio/Что-то не так/Маркетинг _ Илья Балахнин.mp3">
            </audio>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Коммуникативный гипноз _ Ангелина Шам</h2>
            <audio controls class="w-100 mt-3">
                <source
                    src="../audio/Что-то не так/Коммуникативный гипноз _ Ангелина Шам.mp3">
            </audio>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">ЗОЖ, витамины, сон и миф о 10 тыс шагов _ Кирилл Маслиев</h2>
            <audio controls class="w-100 mt-3">
                <source
                    src="../audio/Что-то не так/ЗОЖ, витамины, сон и миф о 10 тыс шагов _ Кирилл Маслиев.mp3">
            </audio>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row d-flex flex-column">
        <div class="col d-flex flex-column align-items-baseline">
            <img src="../img/Подкаст4.jpg" class="img-fluid" alt="" />
            <h1 class="mx-5 fw-bold">Самые честные новости</h1>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Тр** тараканов _ Бомбежка Израиля _ МТС потеряло яйцо</h2>
            <audio controls class="w-100 mt-3">
                <source
                    src="../audio/Самаые честные новости/Трах тараканов _ Бомбежка Израиля _ МТС потеряло яйцо.mp3">
            </audio>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Трамп сел на 136 лет _ Отлизал пенсионерке за 200 млн _ Слоны-разрушители</h2>
            <audio controls class="w-100 mt-3">
                <source
                    src="../audio/Самаые честные новости/Трамп сел на 136 лет _ Отлизал пенсионерке за 200 млн _ Слоны-разрушители.mp3">
            </audio>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Суд над «ЕбиДоеби» _ Онлайн-призыв _ Полный запрет вейпов</h2>
            <audio controls class="w-100 mt-3">
                <source
                    src="../audio/Самаые честные новости/Суд над «ЕбиДоеби» _ Онлайн-призыв _ Полный запрет вейпов.mp3">
            </audio>
        </div>
        <div class="col w-100 mt-3">
            <h2 class="fs-4 mb-0">Клопы сожрали мужчину _ У Путина рак _ Переворот в Судане</h2>
            <audio controls class="w-100 mt-3">
                <source
                    src="../audio/Самаые честные новости/Клопы сожрали мужчину _ У Путина рак _ Переворот в Судане.mp3">
            </audio>
        </div>
    </div>
</div>

<div class="container w-50 mb-5">
    <hr>
    <div class="row justify-content-around align-items-center">
        <div class="col-auto">
            <a class="text-decoration-none text-dark fs-5" href="../index.html">Главная</a>
        </div>
        <div class="col-auto">
            <a class="text-decoration-none text-dark fs-5" href="../musik.html">Музыка</a>
        </div>
        <div class="col-auto">
            <a class="text-decoration-none text-dark fs-5" href="../novosti.html">Новости</a>
        </div>
        <div class="col-auto">
            <a class="text-decoration-none text-dark fs-5" href="../php/podcasts.php">Подкасты</a>
        </div>
        <div class="col-auto">
            <a class="text-decoration-none text-dark fs-5" href="../vedushie.html">Ведущие</a>
        </div>
    </div>
    <hr>
</div>

<div class="footer">
    <div class="container w-100 p-5">
        <p>*В аудиозаписях возможно упоминание Инстаграм. Компания Meta Platforms Inc., владеющая социальными
            сетями
            Instagram, по решению суда от 21.03.2022 признана экстремистской организацией, ее деятельность на
            территории России запрещена.</p>
        <p>© Все права защищены</p>
        <p>По всем вопросам размещения рекламы на НАШЕ радио: +7 (921) 123 45-67
            Адрес электронной почты для отправления досудебной претензии по вопросам нарушения авторских и смежных
            прав:
            nasheradio@mail.ru</p>
        <p>Политика конфиденциальности.</p>
    </div>
</div>






<!-- Бутсрап -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>

<!-- Слайдер Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Подключение JavaScript Slick Slider -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


<script src="js/main.js"></script>
</body>
</html>
