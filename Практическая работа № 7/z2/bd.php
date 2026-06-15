<?php
$host = 'localhost';
$user = 'root';        // по умолчанию в OpenServer/XAMPP
$password = '';        // пустой пароль
$dbname = 'mydb';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Устанавливаем кодировку UTF-8
$conn->set_charset("utf8mb4");
?>