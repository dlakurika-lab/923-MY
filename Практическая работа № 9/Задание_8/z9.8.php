<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP - Задание 8</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .team-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin: 15px 0;
            background-color: #f9f9f9;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .team-card h3 {
            margin-top: 0;
            color: #4CAF50;
        }
        .team-card p {
            margin: 8px 0;
        }
        .label {
            font-weight: bold;
            color: #333;
            display: inline-block;
            width: 120px;
        }
        pre {
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-size: 12px;
        }
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>
    <h2>Работа с JSON форматом</h2>
    <hr>
    
    <?php
        // 1. Подключаем файл team.txt
        // Файл содержит переменную $team с JSON строкой
        require 'team.txt';
        
        echo "<h2>Шаг 1: Файл team.txt подключен</h2>";
        
        // Выводим исходную JSON строку (обрезаем для читаемости)
        echo "<h3>Исходная JSON строка (фрагмент):</h3>";
        echo "<code>" . htmlspecialchars(substr($team, 0, 500)) . "...</code><br><br>";
        
        // 2. Декодируем JSON строку в массив объектов PHP
        // Второй параметр false (или опущен) - получаем объекты
        $decoded_as_objects = json_decode($team);
        
        // Альтернативный вариант: декодируем как массив (ассоциативный)
        $decoded_as_array = json_decode($team, true);
        
        // Проверка на ошибки декодирования
        if (json_last_error() === JSON_ERROR_NONE) {
            echo "<p style='color: green; font-weight: bold;'>✓ JSON успешно декодирован!</p>";
        } else {
            echo "<p style='color: red; font-weight: bold;'>✗ Ошибка декодирования: " . json_last_error_msg() . "</p>";
        }
        
        // 3. Выводим результат декодирования в браузер
        
        echo "<h2>Результат декодирования (как массив объектов PHP):</h2>";
        echo "<pre>";
        print_r($decoded_as_objects);
        echo "</pre>";
        
        echo "<hr>";
        
        // Дополнительно: выводим данные в читаемом виде (красивое форматирование)
        echo "<h2>Информация о группах (читаемый вид):</h2>";
        
        if (is_array($decoded_as_objects) && count($decoded_as_objects) > 0) {
            foreach ($decoded_as_objects as $index => $team_member) {
                echo "<div class='team-card'>";
                echo "<h3>" . ($index + 1) . ". " . htmlspecialchars($team_member->name) . "</h3>";
                echo "<p><span class='label'>ID:</span> " . htmlspecialchars($team_member->id_team) . "</p>";
                echo "<p><span class='label'>Псевдоним:</span> " . htmlspecialchars($team_member->alias) . "</p>";
                echo "<p><span class='label'>Страна:</span> " . htmlspecialchars($team_member->country) . "</p>";
                echo "<p><span class='label'>Год основания:</span> " . htmlspecialchars($team_member->date) . "</p>";
                echo "<p><span class='label'>Стиль:</span> " . htmlspecialchars($team_member->style) . "</p>";
                echo "<p><span class='label'>Описание:</span> " . htmlspecialchars(substr($team_member->content, 0, 200)) . "...</p>";
                echo "<p><span class='label'>Примечание:</span> " . ($team_member->note ? htmlspecialchars($team_member->note) : '—') . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Нет данных для отображения.</p>";
        }
        
        // Дополнительная информация: количество элементов в массиве
        echo "<hr>";
        echo "<h2>Статистика:</h2>";
        echo "<p>Количество групп в массиве: <strong>" . count($decoded_as_objects) . "</strong></p>";
        
        // Вывод информации о типе данных
        echo "<h3>Тип данных после декодирования:</h3>";
        echo "<p>Переменная \$decoded_as_objects — тип: " . gettype($decoded_as_objects) . "</p>";
        if (is_array($decoded_as_objects) && count($decoded_as_objects) > 0) {
            echo "<p>Первый элемент — тип: " . gettype($decoded_as_objects[0]) . "</p>";
            echo "<p>Доступ к свойствам объекта: <code>\$decoded_as_objects[0]->name</code> = " . $decoded_as_objects[0]->name . "</p>";
        }
    ?>
    
</body>
</html>