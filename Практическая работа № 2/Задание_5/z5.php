<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Переменные</h2>
	<hr>

	
	<?php
		$usd = 1000;
        $rub = 75.87;
        $cny = 0.09;
	?>
    <?php
    $curs_cny = $usd * $rub *$cny;
    echo "1000 usd = $curs_cny cny";
    ?>

</body>
</html>