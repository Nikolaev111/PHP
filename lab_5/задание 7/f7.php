<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Николаев</title>
</head>
<body>
	<form method="post">
    Введите число от 1 до 10
    <input type="text" name="a" size="3">
    <input type="hidden" name="h" value="5">
    <p><button type="submit" name="obr">проверить</button></p>
  </form>

  <?php 
  if  (isset($_POST["obr"])){
    if ($_POST["a"] == $_POST["h"]){
      echo $_POST["a"] . " - УГАДАЛИ!";
    }else{
      if ($_POST["a"] > $_POST["h"]){
        echo $_POST["a"] . " - МНОГО...";
      }else {
        echo $_POST["a"] . " - МАЛО...";
      }
    }
  }
  ?>
</body>
</html>