<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Отправка данных на сервер</h1>
    <h2>Еще о формах</h2>
    <hr>
    <h2>Результат обработки формы</h2>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<h3>Данные получены:</h3>";
        
        $name = $_POST['name'] ?? 'не указано';
        $email = $_POST['email'] ?? 'не указано';
        $form = $_POST['form'] ?? 'не указано';
        $lang = isset($_POST['lang']) ? implode(', ', $_POST['lang']) : 'не выбрано';
        $interes = isset($_POST['interes']) ? implode(', ', $_POST['interes']) : 'не выбрано';
        
        echo "<p><strong>Имя:</strong> $name</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Выбранные курсы:</strong> $lang</p>";
        echo "<p><strong>Форма обучения:</strong> $form</p>";
        echo "<p><strong>Направления ИТ:</strong> $interes</p>";
    } else {
        echo "<p>Ошибка: данные не были отправлены методом POST.</p>";
    }
    ?>
    
    <p><a href="index.php">Вернуться к редактированию</a></p>
</body>
</html>