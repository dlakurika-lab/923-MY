<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP - Задание 9</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .card {
            background: white;
            border-radius: 8px;
            padding: 15px;
            margin: 10px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card h3 {
            margin-top: 0;
            color: #4CAF50;
        }
        .card p {
            margin: 8px 0;
        }
        .label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            width: 120px;
        }
        pre {
            background: #2d2d2d;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-size: 12px;
        }
        hr {
            margin: 20px 0;
        }
        .success {
            color: green;
            font-weight: bold;
        }
        .info {
            background: #e3f2fd;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Отправка данных на сервер</h1>
    <h2>Работа с JSON форматом</h2>
    <hr>

    <?php
        // 1. Подключаем файл team.json
        require __DIR__ . '/team.json';
        
        echo "<div class='info'>";
        echo "<strong>✓ Шаг 1:</strong> Файл team.json успешно подключен<br>";
        echo "</div>";
        
        // 2. Декодируем JSON строку в ассоциативный массив PHP
        $teams = json_decode($team, true);
        
        // Проверка успешности декодирования
        if (json_last_error() !== JSON_ERROR_NONE) {
            die("<p style='color: red;'>Ошибка декодирования JSON: " . json_last_error_msg() . "</p>");
        }
        
        echo "<div class='info'>";
        echo "<strong>✓ Шаг 2:</strong> JSON декодирован в ассоциативный массив<br>";
        echo "Количество групп в массиве: <strong>" . count($teams) . "</strong><br>";
        echo "</div>";
        
        // 3. Добавляем информацию о новой группе из файла Пикник.txt
        
        // Данные для добавления (из файла Пикник.txt)
        $new_team = [
            "id_team" => "7",
            "name" => "Пикник",
            "alias" => "picnic",
            "country" => "Россия",
            "content" => "Группа образована в сентябре 1978 года в Ленинграде из студентов Ленинградского политехнического университета (Политеха), игравших в любительской группе «Орион»",
            "date" => "1978",
            "style" => "рок, арт, готик, инди",
            "path" => "/assets/teams/picnic.jpg",
            "note" => "Отправной точкой нынешнего «Пикника» сами участники группы считают приход в группу Эдмунда Шклярского в 1981 году, либо год записи первого альбома — 1982 год"
        ];
        
        // Добавляем новую группу в массив
        $teams[] = $new_team;
        
        echo "<div class='info'>";
        echo "<strong>✓ Шаг 3:</strong> Добавлена новая группа \"Пикник\"<br>";
        echo "Новое количество групп в массиве: <strong>" . count($teams) . "</strong><br>";
        echo "</div>";
        
        // 4. Выводим результат работы сценария в браузер
        
        echo "<h2>Результат работы сценария</h2>";
        echo "<h3>Массив всех групп (в читаемом виде):</h3>";
        
        // Выводим все группы в виде карточек
        foreach ($teams as $index => $team) {
            echo "<div class='card'>";
            echo "<h3>" . ($index + 1) . ". " . htmlspecialchars($team['name']) . "</h3>";
            echo "<p><span class='label'>ID:</span> " . htmlspecialchars($team['id_team']) . "</p>";
            echo "<p><span class='label'>Псевдоним:</span> " . htmlspecialchars($team['alias']) . "</p>";
            echo "<p><span class='label'>Страна:</span> " . htmlspecialchars($team['country']) . "</p>";
            echo "<p><span class='label'>Год основания:</span> " . htmlspecialchars($team['date']) . "</p>";
            echo "<p><span class='label'>Стиль:</span> " . htmlspecialchars($team['style']) . "</p>";
            echo "<p><span class='label'>Описание:</span> " . htmlspecialchars(substr($team['content'], 0, 150)) . "...</p>";
            echo "<p><span class='label'>Примечание:</span> " . ($team['note'] ? htmlspecialchars(substr($team['note'], 0, 100)) . "..." : '—') . "</p>";
            echo "</div>";
        }
        
        // Вывод структуры массива в формате print_r
        echo "<h3>Структура массива (print_r):</h3>";
        echo "<pre>";
        print_r($teams);
        echo "</pre>";
        
        // Дополнительно: вывод информации о новой группе отдельно
        echo "<h3>Информация о добавленной группе:</h3>";
        echo "<div class='card' style='border: 2px solid #4CAF50;'>";
        echo "<h3 style='color: #4CAF50;'>✨ НОВАЯ ГРУППА ✨</h3>";
        echo "<p><span class='label'>ID:</span> " . $new_team['id_team'] . "</p>";
        echo "<p><span class='label'>Название:</span> " . $new_team['name'] . "</p>";
        echo "<p><span class='label'>Псевдоним:</span> " . $new_team['alias'] . "</p>";
        echo "<p><span class='label'>Страна:</span> " . $new_team['country'] . "</p>";
        echo "<p><span class='label'>Год основания:</span> " . $new_team['date'] . "</p>";
        echo "<p><span class='label'>Стиль:</span> " . $new_team['style'] . "</p>";
        echo "<p><span class='label'>Описание:</span> " . $new_team['content'] . "</p>";
        echo "<p><span class='label'>Путь к изображению:</span> " . $new_team['path'] . "</p>";
        echo "<p><span class='label'>Примечание:</span> " . $new_team['note'] . "</p>";
        echo "</div>";
    ?>
</div>
</body>
</html>