<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Типы данных</h2>
	<hr>
	<h2>Слабая типизация</h2>
	
	<?php
		$VarStr = 'Слабая типизация PHP';

		const CONSTSTR = 'Слабая типизация PHP';

		define("ARRSTR", array('Слабая типизация PHP'));

		// Тестирование типов данных с помощью var_dump()
		echo '<pre>';
		
		echo '1. Тестирование переменной: ' . "\n";
		var_dump($VarStr);
		echo "\n";

		echo '2. Тестирование константы const: ' . "\n";
		var_dump(CONSTSTR);
		echo "\n";

		echo '3. Тестирование константы-массива (элемент с индексом 0): ' . "\n";
		var_dump(ARRSTR[0]);
		
		echo '</pre>';
	?>
</body>
</html>