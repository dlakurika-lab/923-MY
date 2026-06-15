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
    <h1>О нас</h1>
    <div>
        <img src="assets/about/bat.jpg" alt="bat" style="width:200px; margin:10px;">
        <img src="assets/about/flu.jpg" alt="flu" style="width:200px; margin:10px;">
        <div>
            <p>Тьма, пришедшая со Средиземного моря, накрыла ненавидимый прокуратором город. Исчезли висячие мосты, соединяющие храм со страшной Антониевой башней, опустилась с неба бездна и залила крылатых богов над гипподромом, Хасмонейский дворец с бойницами, базары, караван-сараи, переулки, пруды...</p>
            <p>Пропал Ершалаим - великий город, как будто не существовал на свете.</p>
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