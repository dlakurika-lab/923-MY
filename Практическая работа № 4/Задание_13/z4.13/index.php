<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Управляющие конструкции</h1>
    <h2>Просмотр альбома</h2>
    <hr>

    <?php
    require 'albums.php';
    require 'tracks.php';
    $album_id = isset($_GET['id_album']) ? $_GET['id_album'] : null;

    if ($album_id) {
        $target_album = null;
        foreach ($albums as $album) {
            if ($album['id_album'] == $album_id) {
                $target_album = $album;
                break;
            }
        }
        if ($target_album) {
            echo "<h3>{$target_album['title']} ({$target_album['country']})</h3>\n";
            echo '<ul>';
            foreach ($tracks as $track) {
                if ($track['id_album'] == $album_id) {
                    echo "<li>{$track['name']}</li>";
                }
            }
            echo '</ul>';
        } else {
            echo '<p>Альбом с ID = $album_id не найден.</p>';
            echo '<p>Доступные альбомы:</p>';
            echo '<ul>';
            foreach ($albums as $album) {
                echo "<li><a href='?id_album={$album['id_album']}'>{$album['title']}</a> (ID: {$album['id_album']})</li>";
            }
            echo '</ul>';
        }
    } else {
        echo '<p>Выберите альбом для просмотра:</p>';
        echo '<ul>';
        foreach ($albums as $album) {
            echo "<li><a href='?id_album={$album['id_album']}'>{$album['title']}</a> ({$album['country']}, {$album['date']})</li>";
        }
        echo '</ul>';
    }
    ?>
</body>
</html>