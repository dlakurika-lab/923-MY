<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-3">
        <form action="" method="post" class="w-50 mx-auto">
            <h2 class="text-center">Регистрация</h2>
            <input type="text" name="name" class="form-control mb-2" placeholder="Имя" required>
            <input type="text" name="login" class="form-control mb-2" placeholder="Логин" required>
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-2" placeholder="Пароль" required>
            <button type="submit" name="submit" class="btn btn-success w-100">Отправить</button>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Подключение к БД
        $connect = new mysqli("localhost", "root", "", "bdd");

        if ($connect->connect_error) {
            die("<div class='alert alert-danger'>Ошибка: " . $connect->connect_error . "</div>");
        }

        // Экранирование данных
        $name = $connect->real_escape_string($_POST['name']);
        $login = $connect->real_escape_string($_POST['login']);
        $email = $connect->real_escape_string($_POST['email']);
        $password = $connect->real_escape_string($_POST['password']);

        // Вставка данных
        $sql = "INSERT INTO users (name, login, email, password) VALUES ('$name', '$login', '$email', '$password')";

        if ($connect->query($sql)) {
            echo "<div class='alert alert-success text-center'>Успешно!</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Ошибка: " . $connect->error . "</div>";
        }
        $connect->close();
    }
    ?>
</body>
</html>
