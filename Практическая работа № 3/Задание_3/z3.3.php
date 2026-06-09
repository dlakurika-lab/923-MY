<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$teacher = [
    'lastname'   => 'Лаврецкая',
    'firstname'  => 'Елизавета',
    'patronymic' => 'Викторовна',
    'login'      => 'elizaveta',
    'password'   => '12345',
    'email'      => 'lovel@mail.ru'
];

echo "<h3>Вы успешно зарегистрированы на сайте</h3>";

echo "<p><b>" . $teacher['lastname'] . " " . $teacher['firstname'] . " " . $teacher['patronymic'] . "</b></p>";

echo "<p>Логин: " . $teacher['login'] . "</p>";
echo "<p>E-mail: " . $teacher['email'] . "</p>";
echo "<p>Пароль: " . $teacher['password'] . "</p>";
?>

</body>
</html>