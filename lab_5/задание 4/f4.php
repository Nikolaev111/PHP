<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Николаев</title>
</head>
<body>
	<h1>Примитивный калькулятор: </h1>
	<form method="post" action="f4_p.php">
		<p><label for="a">a:</label><input type="text" name="a" id="a"></p>
			<p><label for="plus">+</label><input type="radio" name="d" id="plus" value="plus"></p>
				<p><label for="multiply">*</label><input type="radio" name="d" id="multiply" value="multiply"></p>
					<p><label for="b">b:</label><input type="text" name="b" id="b"></p>
					<p><label for="f">Показать только ответ: </label> <input type="checkbox" name="f" id="f"></p>
					<button type="submit">Вычислить</button>

	</form>
</body>
</html>