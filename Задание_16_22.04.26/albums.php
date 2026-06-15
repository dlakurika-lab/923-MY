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
    <h1>Альбомы</h1>
    <table>
        <tr>
            <th>Обложка<br>альбома</th>
            <th>Название<br>альбома</th>
            <th>Год выпуска<br>альбома</th>
            <th>Страна выпуска<br>альбома</th>
        </tr>
        <tr>
            <td><img src="assets/albums/Back_in_Black.svg" class="album_img" alt=""></td>
            <td>Back in Black <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/Back_in_Black" target="_blank">подробнее...</a></span></td>
            <td>1980</td>
            <td>США</td>
        </tr>
        <tr>
            <td><img src="assets/albums/highway-to-hell.jpg" class="album_img" alt=""></td>
            <td>Highway to Hell <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/Highway_to_Hell" target="_blank">подробнее...</a></span></td>
            <td>1979</td>
            <td>Австралия</td>
        </tr>
        <tr>
            <td><img src="assets/albums/the-razors-edge.jpg" class="album_img" alt=""></td>
            <td>The Razors Edge <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/The_Razors_Edge" target="_blank">подробнее...</a></span></td>
            <td>1990</td>
            <td>Австралия</td>
        </tr>
        <tr>
            <td><img src="assets/albums/greatest-hits-pink-floyd.jpg" class="album_img" alt=""></td>
            <td>Greatest Hits (Pink Floyd) <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/Pink_Floyd" target="_blank">подробнее...</a></span></td>
            <td>1999</td>
            <td>США</td>
        </tr>
        <tr>
            <td><img src="assets/albums/greatest-hits-beatles.jpg" class="album_img" alt=""></td>
            <td>Greatest Hits (The Beatles) <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/The_Beatles" target="_blank">подробнее...</a></span></td>
            <td>1978</td>
            <td>США</td>
        </tr>
        <tr>
            <td><img src="assets/albums/a-hard-days-night.jpg" class="album_img" alt=""></td>
            <td>A Hard Day\'s Night <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/A_Hard_Day%27s_Night_(%D0%B0%D0%BB%D1%8C%D0%B1%D0%BE%D0%BC)" target="_blank">подробнее...</a></span></td>
            <td>1964</td>
            <td>Великобритания</td>
        </tr>
        <tr>
            <td><img src="assets/albums/abbey-road.jpg" class="album_img" alt=""></td>
            <td>Abbey Road <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/Abbey_Road" target="_blank">подробнее...</a></span></td>
            <td>1969</td>
            <td>Великобритания</td>
        </tr>
        <tr>
            <td><img src="assets/albums/la-woman.jpg" class="album_img" alt=""></td>
            <td>L.A. Woman <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/L.A._Woman" target="_blank">подробнее...</a></span></td>
            <td>1971</td>
            <td>США</td>
        </tr>
        <tr>
            <td><img src="assets/albums/let-there-be-rock.jpg" class="album_img" alt=""></td>
            <td>Let There Be Rock <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/Let_There_Be_Rock" target="_blank">подробнее...</a></span></td>
            <td>1977</td>
            <td>Австралия</td>
        </tr>
        <tr>
            <td><img src="assets/albums/rocks.jpg" class="album_img" alt=""></td>
            <td>Rocks <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/Rocks_(%D0%B0%D0%BB%D1%8C%D0%B1%D0%BE%D0%BC)" target="_blank">подробнее...</a></span></td>
            <td>1976</td>
            <td>США</td>
        </tr>
        <tr>
            <td><img src="assets/albums/strange-days.jpg" class="album_img" alt=""></td>
            <td>Strange Days <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/Strange_Days" target="_blank">подробнее...</a></span></td>
            <td>1967</td>
            <td>США</td>
        </tr>
        <tr>
            <td><img src="assets/albums/the-dark-side-of-the-moon.jpg" class="album_img" alt=""></td>
            <td>The Dark Side of the Moon <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/The_Dark_Side_of_the_Moon" target="_blank">подробнее...</a></span></td>
            <td>1973</td>
            <td>Великобритания</td>
        </tr>
        <tr>
            <td><img src="assets/albums/wish-you-were-here.jpg" class="album_img" alt=""></td>
            <td>Wish You Were Here <br><span class="td_info"><a href="https://ru.wikipedia.org/wiki/Wish_You_Were_Here_(%D0%B0%D0%BB%D1%8C%D0%B1%D0%BE%D0%BC_Pink_Floyd)" target="_blank">подробнее...</a></span></td>
            <td>1975</td>
            <td>Великобритания</td>
        </tr>
    </table>
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