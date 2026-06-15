<?php
    /*
    исходный одномерный индексный PHP массив    
    */

    $array = ["Мастер и Маргарита", "М.Булгаков", 1940, "Мистика", true];
    
    // Вручную создаем JSON-строку в виде JSON массива
    // Правила:
    // - строки в двойных кавычках
    // - числа без кавычек
    // - логическое значение true без кавычек
    // - элементы разделяются запятыми
    // - массив заключается в квадратные скобки
    
    $json_string = '["Мастер и Маргарита", "М.Булгаков", 1940, "Мистика", true]';
    
    echo "<h2>Исходный PHP массив:</h2>";
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    
    echo "<h2>Созданная вручную JSON-строка:</h2>";
    echo "<code>" . htmlspecialchars($json_string) . "</code><br>";
    
    // Декодируем JSON-строку обратно в PHP переменную
    // Второй параметр true означает, что результат будет массивом (а не объектом)
    $decoded_array = json_decode($json_string, true);
    
    echo "<h2>Результат декодирования JSON (json_decode):</h2>";
    echo "<pre>";
    var_dump($decoded_array);
    echo "</pre>";
    
    // Проверка: сравниваем исходный и декодированный массивы
    echo "<h2>Проверка идентичности массивов:</h2>";
    if ($array === $decoded_array) {
        echo "<p style='color: green; font-weight: bold;'>✓ Успех! Исходный и декодированный массивы идентичны.</p>";
    } else {
        echo "<p style='color: red; font-weight: bold;'>✗ Ошибка! Массивы не совпадают.</p>";
    }
    
    // Дополнительно: вывод элементов для наглядности
    echo "<h2>Вывод элементов декодированного массива:</h2>";
    echo "<ul>";
    echo "<li><strong>Название:</strong> " . $decoded_array[0] . "</li>";
    echo "<li><strong>Автор:</strong> " . $decoded_array[1] . "</li>";
    echo "<li><strong>Год:</strong> " . $decoded_array[2] . "</li>";
    echo "<li><strong>Жанр:</strong> " . $decoded_array[3] . "</li>";
    echo "<li><strong>Бестселлер:</strong> " . ($decoded_array[4] ? 'Да' : 'Нет') . "</li>";
    echo "</ul>";
?>