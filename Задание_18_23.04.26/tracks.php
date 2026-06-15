<?php include 'data/tracks.php'; ?>
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
            <h1>Треки</h1>
            <table>
                <tr>
                    <th>ID трека</th>
                    <th>Название песни</th>
                    <th>Примечание</th>
                </tr>
                <?php
                $tpl = file_get_contents(__DIR__ . '/tpl/tracks.tpl');
                foreach ($content as $item) {
                    $wiki = ($item['id_album'] == '4') ? 'Abbey_Road' : 'Rocks_(%D0%B0%D0%BB%D1%8C%D0%B1%D0%BE%D0%BC)';
                    printf($tpl,
                        $item['id_track'],
                        $item['name'],
                        $wiki,
                        $item['note']
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