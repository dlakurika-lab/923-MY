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

$content = array(
    array(
        'id_album' => '1',
        'name' => 'The Dark Side of the Moon',
        'alias' => 'the-dark-side-of-the-moon',
        'country' => 'Великобритания',
        'content' => '',
        'date' => '1973',
        'path' => 'assets/albums/the-dark-side-of-the-moon.jpg',
        'note' => NULL,
        'id_team' => '2'
    ),
    array(
        'id_album' => '2',
        'name' => 'Wish You Were Here',
        'alias' => 'wish-you-were-here',
        'country' => 'Великобритания',
        'content' => '',
        'date' => '1975',
        'path' => 'assets/albums/wish-you-were-here.jpg',
        'note' => NULL,
        'id_team' => '2'
    ),
    array(
        'id_album' => '3',
        'name' => 'Greatest Hits',
        'alias' => 'greatest-hits',
        'country' => 'США',
        'content' => '',
        'date' => '1999',
        'path' => 'assets/albums/greatest-hits-pink-floyd.jpg',
        'note' => NULL,
        'id_team' => '2'
    ),
    array(
        'id_album' => '4',
        'name' => 'Abbey Road',
        'alias' => 'abbey-road',
        'country' => 'Великобритания',
        'content' => '',
        'date' => '1969',
        'path' => 'assets/albums/abbey-road.jpg',
        'note' => NULL,
        'id_team' => '3'
    ),
    array(
        'id_album' => '5',
        'name' => 'A Hard Day\'s Night',
        'alias' => 'a-hard-days-night',
        'country' => 'Великобритания',
        'content' => '',
        'date' => '1964',
        'path' => 'assets/albums/a-hard-days-night.jpg',
        'note' => NULL,
        'id_team' => '3'
    ),
    array(
        'id_album' => '6',
        'name' => 'Back in Black',
        'alias' => 'back-in-black',
        'country' => 'США',
        'content' => '',
        'date' => '1980',
        'path' => 'assets/albums/Back_in_Black.svg',
        'note' => NULL,
        'id_team' => '4'
    ),
    array(
        'id_album' => '7',
        'name' => 'Highway to Hell',
        'alias' => 'highway-to-hell',
        'country' => 'Австралия',
        'content' => '',
        'date' => '1979',
        'path' => 'assets/albums/highway-to-hell.jpg',
        'note' => NULL,
        'id_team' => '4'
    ),
    array(
        'id_album' => '8',
        'name' => 'The Razors Edge',
        'alias' => 'the-razors-edge',
        'country' => 'Австралия',
        'content' => '',
        'date' => '1990',
        'path' => 'assets/albums/the-razors-edge.jpg',
        'note' => NULL,
        'id_team' => '4'
    ),
    array(
        'id_album' => '9',
        'name' => 'Let There Be Rock',
        'alias' => 'let-there-be-rock',
        'country' => 'ФРГ',
        'content' => '',
        'date' => '1977',
        'path' => 'assets/albums/let-there-be-rock.jpg',
        'note' => NULL,
        'id_team' => '4'
    ),
    array(
        'id_album' => '10',
        'name' => 'Rocks',
        'alias' => 'rocks',
        'country' => 'Великобритания',
        'content' => '',
        'date' => '1982',
        'path' => 'assets/albums/rocks.jpg',
        'note' => NULL,
        'id_team' => '1'
    )
);

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
            <h1>Альбомы</h1>
            <pre><?php print_r($content); ?></pre>
        </div>
    </div>

    <footer>
        <div class="content">
            <?php echo $footer; ?>
        </div>
    </footer>
</body>
</html>