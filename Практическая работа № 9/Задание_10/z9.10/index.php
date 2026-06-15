<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP - Задание 10</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .info {
            background: #e3f2fd;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }
        pre {
            background: #2d2d2d;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-size: 12px;
        }
        code {
            background: #f0f0f0;
            padding: 2px 5px;
            border-radius: 3px;
            font-family: monospace;
        }
    </style>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>
    <h2>Работа с JSON форматом</h2>
    <hr>
    
    <?php
        // 1. Подключаем файл educations.php
        require 'educations.php';
        
        echo "<div class='info'>";
        echo "<strong>✓ Шаг 1:</strong> Файл educations.php подключен<br>";
        echo "Количество записей: " . count($educations) . "<br>";
        echo "</div>";
        
        // 2. Кодируем данные массива $educations в JSON представление
        $json_data = json_encode($educations, JSON_UNESCAPED_UNICODE);
        
        // Проверка успешности кодирования
        if (json_last_error() !== JSON_ERROR_NONE) {
            die("<p style='color: red;'>Ошибка кодирования JSON: " . json_last_error_msg() . "</p>");
        }
        
        echo "<div class='info'>";
        echo "<strong>✓ Шаг 2:</strong> Массив закодирован в JSON<br>";
        echo "Размер JSON строки: " . strlen($json_data) . " байт<br>";
        echo "</div>";
        
        // Выводим JSON строку для наглядности
        echo "<h3>Сформированная JSON строка:</h3>";
        echo "<code style='word-wrap: break-word;'>" . htmlspecialchars($json_data) . "</code><br><br>";
        
        // 3. Формируем ссылку для передачи данных на условный сервер
        // Кодируем JSON строку для безопасной передачи в URL
        $encoded_json = urlencode($json_data);
        $link = "server.php?data=" . $encoded_json;
        
        echo "<div class='info'>";
        echo "<strong>✓ Шаг 3:</strong> Ссылка для передачи данных сформирована<br>";
        echo "</div>";
        
        // Выводим ссылку
        echo "<h3>Ссылка для передачи данных на сервер:</h3>";
        echo "<a href='" . $link . "' target='_blank'>Передать данные об образовании на сервер</a><br><br>";
        
        // Для отладки: выводим полный URL (обрезанный)
        echo "<h3>Сформированный URL (фрагмент):</h3>";
        echo "<code style='word-wrap: break-word; font-size: 11px;'>" . htmlspecialchars(substr($link, 0, 200)) . "...</code><br>";
    ?>
    
</body>
</html>