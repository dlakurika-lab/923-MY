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
        // подключаем массив с альбомами группы
        require "albums.php";
        
        // id - идентификатор альбома, информацию о котором необходимо передать    
        // можно задать в коде 
        $id = 2;
        
        // можно передать GET-параметром (раскомментировать для использования)
        // if (isset($_GET["id"])) {
        //     $id = $_GET["id"];
        // }

        // объявим массив для сбора информации
        $params = array();
        
        // запускаем цикл по массиву
        foreach ($albums as $item) {
            if ($item["id"] == $id) {
                
                // Обрабатываем id (простое значение)
                $params[] = "album[id]=" . urlencode($item['id']);
                
                // Обрабатываем album_name (простое значение)
                $params[] = "album[album_name]=" . urlencode($item['album_name']);
                
                // Обрабатываем date (простое значение)
                $params[] = "album[date]=" . urlencode($item['date']);
                
                // Обрабатываем label (массив)
                if (is_array($item['label'])) {
                    foreach ($item['label'] as $index => $label_value) {
                        $params[] = "album[label][$index]=" . urlencode($label_value);
                    }
                } else {
                    $params[] = "album[label]=" . urlencode($item['label']);
                }
                
                // Обрабатываем format (массив)
                if (is_array($item['format'])) {
                    foreach ($item['format'] as $index => $format_value) {
                        $params[] = "album[format][$index]=" . urlencode($format_value);
                    }
                } else {
                    $params[] = "album[format]=" . urlencode($item['format']);
                }
                
                // Обрабатываем status (массив)
                if (is_array($item['status'])) {
                    foreach ($item['status'] as $index => $status_value) {
                        $params[] = "album[status][$index]=" . urlencode($status_value);
                    }
                } else {
                    $params[] = "album[status]=" . urlencode($item['status']);
                }
            }
        }
        
        // преобразуем массив в строку с разделителем &
        $query_string = implode("&", $params);
        
        // выводим ссылку с GET-параметрами
        echo "<a href='server.php?" . $query_string . "'>Передать информацию об альбоме (ID: $id) на сервер</a><br><br>";
        
        // Для отладки: выводим сформированную строку запроса
        echo "<h3>Сформированная строка запроса:</h3>";
        echo "<code style='word-wrap: break-word; font-size: 12px;'>" . htmlspecialchars($query_string) . "</code>";
    ?>
    
</body>
</html>