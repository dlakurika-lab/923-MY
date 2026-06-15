<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
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
    <h2>Отправка данных в строке запроса</h2>
    <hr>
    <h2>Информация полученная из строки запроса</h2>
    
    <?php
        // Проверяем, передан ли параметр educations
        if (isset($_GET['educations'])) {
            
            echo "<pre>";
            print_r($_GET['educations']);
            echo "</pre>";
            
            // Выводим данные в виде таблицы для наглядности
            echo "<h3>Данные об образовании (табличное представление):</h3>";
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
            
            foreach ($_GET['educations'] as $education) {
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
            
        } else {
            echo "<p style='color: red;'>Параметр 'educations' не передан. Вернитесь на предыдущую страницу и нажмите на ссылку.</p>";
        }
    ?>

</body>
</html>