<?php
$head = '
    <meta charset="utf-8">
    <title>Изучаем PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
';

$header = '
    <div class="logo">
        <img src="assets/logo.png" alt="logo">
        <a href="index.php">
            <h3>Музыкальный сервис</h3>
        </a>
    </div>
    <nav>
        <a href="teams.php">Группы</a> |
        <a href="albums.php">Альбомы</a> |
        <a href="tracks.php">Треки</a> |
        <a href="admin.php">Консоль</a>
    </nav>
';

$content = '
    <h1>Группы</h1>
    <div class="card">
        <img src="assets/teams/acdc.jpg" class="teams_img">
        <div class="card_text">
            <h3>AC/DC</h3>
            <p>Страна: <b>Австралия</b></p>
            <p>Год основания: <b>1970</b></p>
            <p>Стиль группы: <b>Хард-блюз-рок</b></p>
            <span class="td_info"><a href="https://ru.wikipedia.org/wiki/AC/DC" target="_blank">подробнее...</a></span>
        </div>
    </div>
    <div class="card">
        <img src="assets/teams/aerosmith.jpg" class="teams_img">
        <div class="card_text">
            <h3>Aerosmith</h3>
            <p>Страна: <b>США</b></p>
            <p>Год основания: <b>1970</b></p>
            <p>Стиль группы: <b>Хард-рок</b></p>
            <span class="td_info"><a href="https://ru.wikipedia.org/wiki/Aerosmith" target="_blank">подробнее...</a></span>
        </div>
    </div>
    <div class="card">
        <img src="assets/teams/beatles.jpg" class="teams_img">
        <div class="card_text">
            <h3>The Beatles</h3>
            <p>Страна: <b>Великобритания</b></p>
            <p>Год основания: <b>1960</b></p>
            <p>Стиль группы: <b>Рок-н-ролл, поп-рок</b></p>
            <span class="td_info"><a href="https://ru.wikipedia.org/wiki/The_Beatles" target="_blank">подробнее...</a></span>
        </div>
    </div>
    <div class="card">
        <img src="assets/teams/leningrad.jpg" class="teams_img">
        <div class="card_text">
            <h3>Leningrad</h3>
            <p>Страна: <b>Россия</b></p>
            <p>Год основания: <b>1997</b></p>
            <p>Стиль группы: <b>Ска-панк, рок</b></p>
            <span class="td_info"><a href="https://ru.wikipedia.org/wiki/Leningrad_(%D0%B3%D1%80%D1%83%D0%BF%D0%BF%D0%B0)" target="_blank">подробнее...</a></span>
        </div>
    </div>
    <div class="card">
        <img src="assets/teams/pink-floyd.jpg" class="teams_img">
        <div class="card_text">
            <h3>Pink Floyd</h3>
            <p>Страна: <b>Великобритания</b></p>
            <p>Год основания: <b>1965</b></p>
            <p>Стиль группы: <b>Прогрессивный рок</b></p>
            <span class="td_info"><a href="https://ru.wikipedia.org/wiki/Pink_Floyd" target="_blank">подробнее...</a></span>
        </div>
    </div>
    <div class="card">
        <img src="assets/teams/scorpions_.jpg" class="teams_img">
        <div class="card_text">
            <h3>Scorpions</h3>
            <p>Страна: <b>Германия</b></p>
            <p>Год основания: <b>1965</b></p>
            <p>Стиль группы: <b>Хард-рок, хэви-метал</b></p>
            <span class="td_info"><a href="https://ru.wikipedia.org/wiki/Scorpions" target="_blank">подробнее...</a></span>
        </div>
    </div>
';

$footer = '
    <div class="block">
        <div class="logo">
            <img src="assets/logo.png" alt="logo">
            <h2>Музыкальный сервис</h2>
        </div>
    </div>
    <div class="block">
        <div class="head">КОМПАНИЯ</div>
        <div class="links">
            <p><a href="about.php">О нас</a></p>
            <p><a href="contacts.php">Контакты</a></p>
        </div>
    </div>
    <div class="block">
        <div class="head">ПОЛЕЗНЫЕ ССЫЛКИ</div>
        <div class="links">
            <p><a href="https://music.yandex.ru" target="_blank">Яндекс Музыка</a></p>
            <p><a href="https://yandex.ru/support/music/" target="_blank">Справка</a></p>
        </div>
    </div>
';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php echo $head; ?>
</head>
<body>
    <header>
        <div class="content ins">
            <?php echo $header; ?>
        </div>
    </header>

    <div class="main ins">
        <div class="content ins">
            <?php echo $content; ?>
        </div>
    </div>

    <footer>
        <div class="content">
            <?php echo $footer; ?>
        </div>
    </footer>
</body>
</html>