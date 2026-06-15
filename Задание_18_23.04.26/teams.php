<?php include 'data/teams.php'; ?>
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
            <h1>Группы</h1>
            <?php
            $tpl = file_get_contents(__DIR__ . '/tpl/teams.tpl');
            foreach ($content as $item) {
                printf($tpl,
                    $item['path'],
                    $item['name'],
                    $item['country'],
                    $item['date'],
                    $item['style'],
                    $item['alias']
                );
            }
            ?>
        </div>
    </div>

    <footer>
        <div class="content">
            <?php include 'inc/footer.php'; ?>
        </div>
    </footer>
</body>
</html>