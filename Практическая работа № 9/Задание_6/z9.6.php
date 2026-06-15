<?php
    /*
    исходный одномерный ассоциативный PHP массив    
    */

    $assoc_array = [ 
        "name" => "Мастер и Маргарита",
        "author" => "М.Булгаков",
        "year" => 1940,
        "genre" => "Мистика",
        "bestseller" => true
    ];
    
    // Вручную создаем JSON-строку в виде JSON объекта
    // Правила JSON объекта:
    // - заключается в фигурные скобки { }
    // - пары "ключ": значение
    // - ключи обязательно в двойных кавычках
    // - значения: строки в двойных кавычках, числа без кавычек, true/false без кавычек
    // - пары разделяются запятыми
    
    $json_string = '{"name": "Мастер и Маргарита", "author": "М.Булгаков", "year": 1940, "genre": "Мистика", "bestseller": true}';
    
    echo "<h2>Исходный PHP ассоциативный массив:</h2>";
    echo "<pre>";
    var_dump($assoc_array);
    echo "</pre>";
    
    echo "<h2>Созданная вручную JSON-строка (JSON объект):</h2>";
    echo "<code>" . htmlspecialchars($json_string) . "</code><br><br>";
    
    // Декодируем JSON-строку в ассоциативный массив PHP
    // Второй параметр true означает, что результат будет ассоциативным массивом (а не объектом)
    $decoded_array = json_decode($json_string, true);
    
    echo "<h2>Результат декодирования JSON (ассоциативный массив):</h2>";
    echo "<pre>";
    var_dump($decoded_array);
    echo "</pre>";
    
    // Проверка: сравниваем исходный и декодированный массивы
    echo "<h2>Проверка идентичности массивов:</h2>";
    if ($assoc_array === $decoded_array) {
        echo "<p style='color: green; font-weight: bold;'>✓ Успех! Исходный и декодированный массивы идентичны.</p>";
    } else {
        echo "<p style='color: red; font-weight: bold;'>✗ Ошибка! Массивы не совпадают.</p>";
    }
    
    // Дополнительно: вывод элементов для наглядности
    echo "<h2>Вывод элементов декодированного массива:</h2>";
    echo "<ul>";
    echo "<li><strong>Название:</strong> " . $decoded_array['name'] . "</li>";
    echo "<li><strong>Автор:</strong> " . $decoded_array['author'] . "</li>";
    echo "<li><strong>Год:</strong> " . $decoded_array['year'] . "</li>";
    echo "<li><strong>Жанр:</strong> " . $decoded_array['genre'] . "</li>";
    echo "<li><strong>Бестселлер:</strong> " . ($decoded_array['bestseller'] ? 'Да' : 'Нет') . "</li>";
    echo "</ul>";
    
    // Демонстрация различий между декодированием как массив и как объект
    echo "<h2>Дополнительно: сравнение режимов декодирования</h2>";
    
    // Декодирование как объект (второй параметр false или опущен)
    $decoded_object = json_decode($json_string);
    
    echo "<h3>Декодирование как объект (json_decode без true):</h3>";
    echo "<pre>";
    var_dump($decoded_object);
    echo "</pre>";
    echo "<p>Доступ к свойству объекта: <code>\$decoded_object->name</code> = " . $decoded_object->name . "</p>";
    
    echo "<h3>Декодирование как ассоциативный массив (json_decode с true):</h3>";
    echo "<pre>";
    var_dump($decoded_array);
    echo "</pre>";
    echo "<p>Доступ к элементу массива: <code>\$decoded_array['name']</code> = " . $decoded_array['name'] . "</p>";
?>