<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Николаев</title>
</head>
<body>
	<form action="f5_p.php" method="post">
		<p>Фамилия: <input type="text" name="f" size="15"></p>
        <p>Имя: <input type="text" name="n" size="15"></p>
        <p>Форма обращения:</p>
        <p><select name="z" size="1">
          <option value="1" selected="">Господин</option>
          <option value="2">Госпожа</option>
          <option value="3">Товарищ</option>	
        </select></p>
 <p><textarea name="comment" id="comment" cols="48" rows="8"> </textarea>
</p>
        <p> <input type="submit" value="отправить"></p>

	</form>
</body>
</html>