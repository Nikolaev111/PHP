<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Николаев</title>
</head>
<body>
	<h1>проверяем метод POST :</h1>
	<form action="f2_post.php" method="post">
		<label for="username">Ваше имя: </label>
		<input type="text" name="username" id="username">
		<input type="hidden" name="hiden_post" value="Используется метод POST" >
		<button type="submit">Проверить</button>
		

	</form>
</body>
</html>