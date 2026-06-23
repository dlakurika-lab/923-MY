<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Отправка данных на сервер</h1>
	<h2>Безопасность данных, часть 2</h2>

	<?php
		$_ERROR = [];

		// Проверяем, была ли отправлена форма
		if (isset($_POST['login'])) {
			
			// 1. Проверка на пустоту
			if (empty(trim($_POST['login']))) {
				$_ERROR[] = "Не заполнено поле Логин";
			} else {
				// 2. Санитизация (без использования устаревшего FILTER_SANITIZE_STRING)
				$login_raw = trim($_POST['login']);
				
				// Очищаем от HTML-тегов и спецсимволов
				// Вариант 1: используем htmlspecialchars для преобразования спецсимволов
				// Вариант 2: используем strip_tags для удаления тегов
				$login = strip_tags($login_raw); // удаляем HTML/PHP теги
				
				// Оставляем только латинские буквы и цифры
				// (удаляем русские буквы, спецсимволы, пробелы и т.д.)
				$login = preg_replace('/[^a-zA-Z0-9]/', '', $login);
				
				// Приводим к нижнему регистру для соответствия правилу [a-z0-9]
				$login = strtolower($login);
				
				// 3. Валидация по правилу [a-z0-9]{5,10}
				if (!preg_match('/^[a-z0-9]{5,10}$/', $login)) {
					$_ERROR[] = "Логин должен содержать только латинские буквы и цифры (5-10 символов)";
				}
				
				// Проверка на длину (дополнительная)
				if (strlen($login) < 5 || strlen($login) > 10) {
					$_ERROR[] = "Длина логина должна быть от 5 до 10 символов (сейчас: " . strlen($login) . ")";
				}
			}
			
			// Вывод результатов
			if (count($_ERROR) > 0) {
				echo "<h3 class='error'>Обнаружены ошибки:</h3>";
				echo "<pre>";
				print_r($_ERROR);
				echo "</pre>";
				echo "<p><a href='javascript:history.back()'>← Вернуться назад и исправить ошибки</a></p>";
				
				// Показываем, что ввел пользователь
				echo "<hr>";
				echo "<h4>Что было отправлено:</h4>";
				echo "<p><strong>Исходные данные:</strong> <code>" . htmlspecialchars($_POST['login']) . "</code></p>";
				if (isset($login_raw)) {
					echo "<p><strong>После очистки от тегов:</strong> <code>" . htmlspecialchars($login_raw) . "</code></p>";
				}
				if (isset($login)) {
					echo "<p><strong>После удаления недопустимых символов:</strong> <code>" . htmlspecialchars($login) . "</code></p>";
				}
			} else {
				echo "<h3 class='success'>Форма успешно прошла валидацию!</h3>";
				echo "<p><strong>Логин:</strong> <code>" . htmlspecialchars($login) . "</code></p>";
				echo "<p class='success'>Данные успешно проверены и очищены!</p>";
				
				// Показываем процесс очистки
				echo "<hr>";
				echo "<h4>Процесс обработки:</h4>";
				echo "<p><strong>Исходные данные:</strong> <code>" . htmlspecialchars($_POST['login']) . "</code></p>";
				echo "<p><strong>После санитизации:</strong> <code>" . htmlspecialchars($login) . "</code></p>";
			}
			
		} else {
			echo "<p class='info'>Заполните поле логина и отправьте форму.</p>";
		}
		
		// Техническая информация
		if (isset($_POST['login']) && isset($login)) {
			echo "<hr>";
			echo "<h4>Техническая информация:</h4>";
			echo "<p><strong>Длина логина:</strong> " . strlen($login) . " символов</p>";
			echo "<p><strong>Регулярное выражение:</strong> <code>/^[a-z0-9]{5,10}$/</code></p>";
		}
	?>
	
</body>
</html>