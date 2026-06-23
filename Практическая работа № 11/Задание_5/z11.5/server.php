<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>
	<h2>Безопасность данных, часть 2</h2>
	<hr>
	<h2>Загрузка файлов</h2>

	<?php
		$_ERROR = []; // массив ошибок

		// Проверяем, была ли отправлена форма
		if (isset($_POST['load']) && isset($_FILES['myfile'])) {
			
			// ============================================
			// 1. ПРОВЕРКА ПОЛЯ ЛОГИН
			// ============================================
			if (empty(trim($_POST['login']))) {
				$_ERROR[] = "Не заполнено поле Логин";
			} else {
				// Санитизация
				$login = trim($_POST['login']);
				$login = strip_tags($login);
				$login = preg_replace('/[^a-zA-Z0-9]/', '', $login);
				$login = strtolower($login);
				
				// Валидация
				if (!preg_match('/^[a-z0-9]{5,10}$/', $login)) {
					$_ERROR[] = "Логин должен содержать только латинские буквы и цифры (5-10 символов)";
				}
			}
			
			// ============================================
			// 2. ПРОВЕРКА ЗАГРУЗКИ НА НАЛИЧИЕ ОШИБОК
			// ============================================
			if (count($_ERROR) == 0) {
				if ($_FILES['myfile']['error'] !== UPLOAD_ERR_OK) {
					switch ($_FILES['myfile']['error']) {
						case UPLOAD_ERR_INI_SIZE:
							$_ERROR[] = "Размер файла превысил максимально допустимый размер";
							break;
						case UPLOAD_ERR_FORM_SIZE:
							$_ERROR[] = "Размер файла превысил значение MAX_FILE_SIZE";
							break;
						case UPLOAD_ERR_PARTIAL:
							$_ERROR[] = "Файл был загружен только частично";
							break;
						case UPLOAD_ERR_NO_FILE:
							$_ERROR[] = "Файл не был выбран для загрузки";
							break;
						default:
							$_ERROR[] = "Ошибка загрузки файла (код: " . $_FILES['myfile']['error'] . ")";
					}
				}
			}
			
			// ============================================
			// 3. ПРОВЕРКА ТИПА ФАЙЛА
			// ============================================
			if (count($_ERROR) == 0) {
				$image_type = exif_imagetype($_FILES['myfile']['tmp_name']);
				
				if ($image_type === false) {
					$_ERROR[] = "Загружаемый файл не является файлом изображения";
				} else {
					$allowed_types = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP);
					
					if (!in_array($image_type, $allowed_types)) {
						$_ERROR[] = "Тип файла не разрешен. Разрешены: JPEG, PNG, BMP";
					}
				}
			}
			
			// ============================================
			// 4. ПЕРЕМЕЩЕНИЕ ФАЙЛА В ДИРЕКТОРИЮ UPLOAD
			// ============================================
			if (count($_ERROR) == 0) {
				// Создаем директорию upload, если её нет
				$upload_dir = __DIR__ . '/upload/';
				if (!is_dir($upload_dir)) {
					mkdir($upload_dir, 0755, true);
				}
				
				// Генерируем имя файла
				$file_extension = pathinfo($_FILES['myfile']['name'], PATHINFO_EXTENSION);
				$new_filename = $login . '_' . time() . '.' . $file_extension;
				$new_path = $upload_dir . $new_filename;
				
				// Перемещаем файл
				if (!move_uploaded_file($_FILES['myfile']['tmp_name'], $new_path)) {
					$_ERROR[] = "Не удалось переместить файл в директорию хранения";
				}
			}
			
			// ============================================
			// 5. ВЫВОД РЕЗУЛЬТАТОВ
			// ============================================
			if (count($_ERROR) > 0) {
				echo "<h3>Ошибки:</h3>";
				echo "<pre>";
				print_r($_ERROR);
				echo "</pre>";
				echo "<a href='javascript:history.back()'>Вернуться назад</a>";
			} else {
				echo "<h3 style='color: green;'>Файл успешно загружен!</h3>";
				echo "<p><strong>Логин:</strong> " . htmlspecialchars($login) . "</p>";
				echo "<p><strong>Имя файла:</strong> " . htmlspecialchars($new_filename) . "</p>";
				echo "<img src='upload/" . htmlspecialchars($new_filename) . "' width='200'>";
			}
			
		} else {
			echo "<p>Заполните форму и выберите файл для загрузки.</p>";
		}
	?>

</body>
</html>