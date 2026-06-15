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
        $array = [
            [
                "id" => "1",
                "album_name" => "Atom Heart Mother",
                "date" => "10 октября 1970", 
                "label" => "EMI, Harvest, Capitol",
                "status" => "Золотой (USA)"
            ],
            [
                "id" => "2",
                "album_name" => "Meddle",
                "date" => "30 октября 1971",
                "label" => "EMI, Harvest, Capitol",
                "status" => "Платиновый (USA)"
            ]
        ];

        echo "<h2>Исходный массив</h2>";
        echo "<pre>";
        print_r($array);
        echo "</pre>";

        $params = array();

        foreach ($array as $index => $album) {
            foreach ($album as $key => $value) {
                $params[] = "data[" . $index . "][" . $key . "]=" . urlencode($value);
            }
        }
        
        $query_string = implode("&", $params);
        
        echo '<a href="?' . $query_string . '">Перейти по ссылке с GET-параметрами</a><br><br>';

        echo "<h3>Сформированная строка запроса:</h3>";
        echo "<code>" . htmlspecialchars($query_string) . "</code><br>";

        echo "<h2>Массив из строки запроса</h2>";
        echo "<pre>";
        
        if (isset($_GET["data"])) {
            print_r($_GET["data"]);
        } else {
            echo "Параметр data не передан. Нажмите на ссылку выше.";
        }
        echo "</pre>";
    ?>
    
</body>
</html>