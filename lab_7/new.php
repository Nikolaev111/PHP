<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление нового пользователя</title>
</head>

<body>
    <h2>Регистрация на сайте:</h2>
    <form method="post">
    <p>Имя: <input name="name" size="50" type="text"></p>
    <p>Логин: <input name="login" size="20" type="text"></p>
    Пароль: <input name="password" size="20" type="password"></p>
    <p>E-mail: <input name = "e_mail" size="30" type="text"></p>
    <p>Информация: <textarea name="info" rows="4" cols="40"></textarea></p>

    <p><button type="submit">Добавить</button></p>
    <p><button type="reset">Очистить</button></p>
    </form>
    <a href="index.php">Вернуться к списку пользователей</a>


<?php
if(isset($_POST['login'], $_POST['password'])){
    if (trim($_POST['name']) === '')
    die('Name is empty');

    if (trim($_POST['login']) === '')
  die('Login is empty');

  if (trim($_POST['password']) === '')
  die('Password is empty');

  if (trim($_POST['e_mail']) === '')
  die('Email is empty');

    
    $mysqli = new mysqli('localhost','x91097h0_jm1', 'CEzdE3JzY', 'x91097h0_jm1');
    
    
    if($mysqli->connect_errno) {
        printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    }

    $mysqli->query("SET NAMES utf8");

    $insert_sql = "INSERT INTO user_stud_20 SET user_name='" . $_POST['name'] . "', user_login='" . $_POST['login'] . "', user_password ='" . $_POST['password'] . "', user_e_mail='" . $_POST['e_mail'] . "', user_info='" . $_POST['info'] . "';";
    
    if($mysqli->query($insert_sql)) {
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    } else{
        echo "<p>Ошибка добавления пользователя, возможно данный логин уже используется.</p>";
    }

}


?>
</body>

</html>