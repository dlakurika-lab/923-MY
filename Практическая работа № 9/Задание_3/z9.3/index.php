<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>
    <h2>Отправка данных в строке запроса</h2>
        
    <?php
        // исходный двумерный массив
        $educations = array (
            array (
                'id' => 5, 
                'institution' => 'Московский государственный институт электронной техники (технический университет) ', 
                'qualification' => 'Факультет инфокоммуникационных технологий', 
                'specialty' => 'Программное обеспечение радиоэлектронных систем', 
                'year_receipts' => 2005, 
                'year_release' => 2010, 
                'note' => ''
            ),
            array (
                'id' => 12, 
                'institution' => 'Санкт-Петербургский государственный университет (СПбГУ)', 
                'qualification' => 'Информационные системы и технологии', 
                'specialty' => 'Безопасность киберфизических систем', 
                'year_receipts' => 1993, 
                'year_release' => 1998, 
                'note' => ''      
            )
        );

        // Формируем массив для GET-параметров
        $params = array();
        
        // Перебираем внешний массив (записи об образовании)
        foreach ($educations as $index => $education) {
            // Перебираем внутренний ассоциативный массив (поля записи)
            foreach ($education as $key => $value) {
                // Кодируем значение для безопасной передачи в URL
                $encoded_value = urlencode($value);
                $params[] = "educations[" . $index . "][" . $key . "]=" . $encoded_value;
            }
        }
        
        // Объединяем параметры в строку запроса
        $query_string = implode("&", $params);
        
        // Выводим ссылку для передачи данных на сервер
        echo "<a href='server.php?" . $query_string . "'>Передать данные об образовании на сервер</a><br><br>";
        
        // Для отладки: выводим сформированную строку запроса
        echo "<h3>Сформированная строка запроса:</h3>";
        echo "<code style='word-wrap: break-word;'>" . htmlspecialchars($query_string) . "</code>";
    ?>

</body>
</html>