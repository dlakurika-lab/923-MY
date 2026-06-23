<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Отправка данных на сервер</h1>
    <h2>Регулярные выражения, часть 1</h2>

    <?php
    // Получаем путь к текущей директории
    $current_dir = __DIR__;
    $file_path = $current_dir . '/text.txt';
    
    // Проверяем существование файла
    if (file_exists($file_path)) {
        $text = file_get_contents($file_path);
        
        // Заменяем переносы строк на <br>
        $text = preg_replace('/\r\n|\r|\n/', '<br>', $text);
        
        // Массивы для замены картинок
        $patterns = [];
        $pictures = [];
        
        // Добавляем все паттерны для картинок с помощью цикла
        for ($i = 1; $i <= 6; $i++) {
            $patterns[] = "/\{pict$i\}/";
            $pictures[] = "<p><img src='pictures/pict$i.jpg' style='width:500px;'></p>";
        }
        
        // Заменяем плейсхолдеры на изображения
        $text = preg_replace($patterns, $pictures, $text);
        
        echo $text;
    } else {
        // Показываем информацию о том, где ищем файл
        echo "<p style='color: red;'><b>Ошибка:</b> Файл text.txt не найден!</p>";
        echo "<p>Поиск выполнялся по пути: <b>" . $file_path . "</b></p>";
        echo "<p>Текущая директория: <b>" . $current_dir . "</b></p>";
        
        // Показываем содержимое директории для отладки
        echo "<p>Содержимое директории:</p>";
        echo "<ul>";
        $files = scandir($current_dir);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                echo "<li>" . $file . "</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>