<?php include 'data/albums.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include 'inc/head.php'; ?>
</head>
<body>
    <header>
        <div class="content ins">
            <?php include 'inc/header.php'; ?>
        </div>
    </header>

    <div class="main ins">
        <div class="content ins">
            <h1>Альбомы</h1>
            <table>
                <tr>
                    <th>Обложка<br>альбома</th>
                    <th>Название<br>альбома</th>
                    <th>Год выпуска<br>альбома</th>
                    <th>Страна выпуска<br>альбома</th>
                </tr>
                <?php
                $tpl = file_get_contents(__DIR__ . '/tpl/albums.tpl');
                foreach ($content as $item) {
                    printf($tpl,
                        $item['path'],
                        $item['name'],
                        $item['alias'],
                        $item['date'],
                        $item['country']
                    );
                }
                ?>
            </table>
        </div>
    </div>

    <footer>
        <div class="content">
            <?php include 'inc/footer.php'; ?>
        </div>
    </footer>
</body>
</html>