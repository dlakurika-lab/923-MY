<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP - Сервер</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .card {
            background: #f9f9f9;
            border-left: 4px solid #4CAF50;
            padding: 15px;
            margin: 15px 0;
            border-radius: 4px;
        }
        .card h3 {
            margin-top: 0;
            color: #4CAF50;
        }
        .label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            width: 160px;
        }
        pre {
            background: #2d2d2d;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-size: 12px;
        }
        .error {
            color: red;
            background: #ffebee;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            color: green;
            background: #e8f5e9;
            padding: 10px;
            border-radius: 5px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>
    <h2>Работа с JSON форматом</h2>
    <hr>
    <h2>Информация, полученная из строки JSON GET-параметра</h2>
    
    <?php
        // 4. На сервере принимаем и декодируем полученные данные
        
        // Проверяем наличие GET-параметра data
        if (isset($_GET['data'])) {
            
            // Получаем JSON строку из GET-параметра
            $received_json = $_GET['data'];
            
            // Декодируем JSON в массив PHP
            $decoded_data = json_decode($received_json, true);
            
            // Проверка успешности декодирования
            if (json_last_error() === JSON_ERROR_NONE) {
                
                echo "<div class='success'>";
                echo "<strong>✓ JSON успешно декодирован!</strong><br>";
                echo "</div>";
                
                // Выводим результат в формате print_r (как в примере)
                echo "<h3>Результат print_r():</h3>";
                echo "<pre>";
                print_r($decoded_data);
                echo "</pre>";
                
                // Дополнительно: выводим данные в виде таблицы для наглядности
                echo "<h3>Данные в табличном виде:</h3>";
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Учебное заведение</th>";
                echo "<th>Квалификация</th>";
                echo "<th>Специальность</th>";
                echo "<th>Год поступления</th>";
                echo "<th>Год выпуска</th>";
                echo "<th>Примечание</th>";
                echo "</tr>";
                
                foreach ($decoded_data as $education) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($education['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($education['institution']) . "</td>";
                    echo "<td>" . htmlspecialchars($education['qualification']) . "</td>";
                    echo "<td>" . htmlspecialchars($education['specialty']) . "</td>";
                    echo "<td>" . htmlspecialchars($education['year_receipts']) . "</td>";
                    echo "<td>" . htmlspecialchars($education['year_release']) . "</td>";
                    echo "<td>" . htmlspecialchars($education['note']) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                
                // Вывод информации о типе данных
                echo "<div class='info' style='margin-top: 20px;'>";
                echo "<strong>Информация о полученных данных:</strong><br>";
                echo "Тип данных: " . gettype($decoded_data) . "<br>";
                echo "Количество записей: " . count($decoded_data) . "<br>";
                echo "</div>";
                
            } else {
                echo "<div class='error'>";
                echo "<strong>✗ Ошибка декодирования JSON:</strong> " . json_last_error_msg() . "<br>";
                echo "</div>";
                
                // Выводим полученную строку для отладки
                echo "<h3>Полученная строка:</h3>";
                echo "<code>" . htmlspecialchars($received_json) . "</code>";
            }
            
        } else {
            echo "<div class='error'>";
            echo "<strong>✗ Ошибка!</strong> Параметр 'data' не передан.<br>";
            echo "Вернитесь на предыдущую страницу и нажмите на ссылку.<br>";
            echo "</div>";
        }
    ?>
    
</body>
</html>