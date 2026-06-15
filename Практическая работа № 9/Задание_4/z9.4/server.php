<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .info-block {
            background-color: #f5f5f5;
            border-left: 4px solid #4CAF50;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .info-block p {
            margin: 8px 0;
        }
        .label {
            font-weight: bold;
            color: #333;
        }
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>    
    <h2>Отправка данных в строке запроса</h2>
    <hr>
    <h2>Информация полученная из строки запроса</h2>
    
    <?php
        // информация строки запроса
        
        // Проверяем, передан ли параметр album
        if (isset($_GET['album'])) {
            
            $album = $_GET['album'];
            
            // Выводим данные в читаемом виде
            echo "<div class='info-block'>";
            
            echo "<p><span class='label'>Идентификатор альбома:</span> " . htmlspecialchars($album['id']) . "</p>";
            echo "<p><span class='label'>Название альбома:</span> " . htmlspecialchars($album['album_name']) . "</p>";
            echo "<p><span class='label'>Дата выпуска:</span> " . htmlspecialchars($album['date']) . "</p>";
            
            // Выводим лейблы (если это массив)
            if (isset($album['label'])) {
                echo "<p><span class='label'>Лейбл студии:</span> ";
                if (is_array($album['label'])) {
                    echo implode(", ", array_map('htmlspecialchars', $album['label']));
                } else {
                    echo htmlspecialchars($album['label']);
                }
                echo "</p>";
            }
            
            // Выводим форматы (если это массив)
            if (isset($album['format'])) {
                echo "<p><span class='label'>Формат:</span> ";
                if (is_array($album['format'])) {
                    echo implode(", ", array_map('htmlspecialchars', $album['format']));
                } else {
                    echo htmlspecialchars($album['format']);
                }
                echo "</p>";
            }
            
            // Выводим статусы (если это массив)
            if (isset($album['status'])) {
                echo "<p><span class='label'>Статус:</span> ";
                if (is_array($album['status'])) {
                    echo implode(", ", array_map('htmlspecialchars', $album['status']));
                } else {
                    echo htmlspecialchars($album['status']);
                }
                echo "</p>";
            }
            
            echo "</div>";
            
            // Для отладки: выводим структуру полученного массива
            echo "<h3>Структура полученных данных:</h3>";
            echo "<pre>";
            print_r($album);
            echo "</pre>";
            
        } else {
            echo "<p style='color: red;'>Параметр 'album' не передан. Вернитесь на предыдущую страницу и нажмите на ссылку.</p>";
        }
    ?>
    
</body>
</html>