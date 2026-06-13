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

    // Формируем строку запроса вручную
    // Структура: data[0][id]=1&data[0][album_name]=Atom%20Heart%20Mother&...
    $params = [];
    
    foreach ($array as $index => $item) {
        foreach ($item as $key => $value) {
            // URL-кодируем значения (заменяем пробелы на %20 и т.д.)
            $encodedValue = urlencode($value);
            $params[] = "data[{$index}][{$key}]={$encodedValue}";
        }
    }
    
    $queryString = implode("&", $params);
    
    // Выводим ссылку с GET-параметрами для проверки
    echo "<a href='?" . $queryString . "'>Перейти с сформированными GET-параметрами</a><br><br>";

    echo "<h2>Массив из строки запроса </h2>";
    echo "<pre>";
    
    // Проверяем, передан ли параметр data
    if (isset($_GET["data"])) {
        print_r($_GET["data"]);
    } else {
        echo "GET-параметр 'data' не передан. Нажмите на ссылку выше.";
    }
    echo "</pre>";
?>