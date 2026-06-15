<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .info { background: #f0f0f0; padding: 15px; border-radius: 5px; margin-top: 20px; }
        .error { color: red; }
    </style>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>
    <h2>Отправка данных в строке запроса</h2>
    
    <?php
        // инициализация массива
        $course = [
            [
                "Основы программирования", 
                ["Введение в PHP", "Переменные", "Константы", "Типы данных", "Строки"]
            ],        
            [
                "Функции",
                ["Встроенные функции", "Пользовательские функции", "Область видимости переменных"]
            ],
            [
                "Управляющие конструкции",
                ["Условные операторы", "Циклы", "Конструкции"]
            ]
        ];

        // Вывод данных из массива $course согласно переданных параметров
        
        // Проверяем наличие всех необходимых GET-параметров
        if (isset($_GET['user']) && isset($_GET['topic']) && isset($_GET['lesson'])) {
            
            $user = $_GET['user'];
            $topic_index = $_GET['topic'];
            $lesson_index = $_GET['lesson'];
            
            // Преобразуем параметры в целые числа
            $topic_index = (int)$topic_index;
            $lesson_index = (int)$lesson_index;
            
            // Проверяем валидность индексов
            if ($topic_index >= 1 && $topic_index <= count($course)) {
                
                // Корректируем индекс для массива (массивы в PHP начинаются с 0)
                $topic_array_index = $topic_index - 1;
                
                // Получаем название темы
                $topic_name = $course[$topic_array_index][0];
                
                // Проверяем валидность индекса урока
                $lessons_count = count($course[$topic_array_index][1]);
                
                if ($lesson_index >= 1 && $lesson_index <= $lessons_count) {
                    
                    $lesson_array_index = $lesson_index - 1;
                    $lesson_name = $course[$topic_array_index][1][$lesson_array_index];
                    
                    // Выводим информацию
                    echo "<div class='info'>";
                    echo "<h3>Информация о запросе</h3>";
                    echo "<p><strong>Пользователь:</strong> " . htmlspecialchars($user) . "</p>";
                    echo "<p><strong>Тема:</strong> " . htmlspecialchars($topic_name) . "</p>";
                    echo "<p><strong>Урок:</strong> " . htmlspecialchars($lesson_name) . "</p>";
                    echo "</div>";
                    
                } else {
                    // Ошибка: неверный индекс урока
                    echo "<div class='error'>";
                    echo "<h3>Ошибка!</h3>";
                    echo "<p>Урок с индексом {$lesson_index} не найден в теме '{$topic_name}'.</p>";
                    echo "<p>Доступные уроки: " . implode(", ", $course[$topic_array_index][1]) . "</p>";
                    echo "</div>";
                }
                
            } else {
                // Ошибка: неверный индекс темы
                echo "<div class='error'>";
                echo "<h3>Ошибка!</h3>";
                echo "<p>Тема с индексом {$topic_index} не найдена.</p>";
                echo "<p>Доступные темы:</p><ul>";
                foreach ($course as $index => $topic) {
                    echo "<li>Тема " . ($index + 1) . ": " . $topic[0] . "</li>";
                }
                echo "</ul>";
                echo "</div>";
            }
            
        } else {
            // Ошибка: отсутствуют необходимые параметры
            echo "<div class='error'>";
            echo "<h3>Ошибка!</h3>";
            echo "<p>Не все параметры переданы.</p>";
            echo "<p>Необходимые параметры: user, topic, lesson</p>";
            echo "<p>Пример: <code>server.php/?user=timaty&topic=1&lesson=4</code></p>";
            echo "</div>";
        }
    ?>
    
</body>
</html>