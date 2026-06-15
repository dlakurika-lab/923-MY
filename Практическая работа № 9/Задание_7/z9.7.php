<?php
    $json = '{
        "name": "Harry Potter and the Goblet of Fire",
        "author": "J. K. Rowling",
        "year": 2000,
        "genre": "Fantasy Fiction",
        "bestseller": true
    }';
    
    // Декодируем в ассоциативный массив
    $result = json_decode($json, true);
    
    // Выводим результат
    echo "<pre>";
    print_r($result);
    echo "</pre>";
?>