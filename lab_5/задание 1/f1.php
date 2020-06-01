<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Николаев.</title>
</head>
<body>
	<form action="f1_get.php" method="get">
		<label for="username">Ваше имя: </label>
		<input type="text" id="username" name="username" maxlength="40">
		<input type="hidden" name="hidden_input"
		value="Используется метод GET">
		<button type="submit">Проверить </button>
	</form>

	
</body>
</html>