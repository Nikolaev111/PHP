<!DOCTYPE html>
<html lang = "ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактироване данных о пользователе</title>
</head>

<body>
    <?php
        $mysqli = new mysqli('localhost','x91097h0_jm1', 'CEzdE3JzY', 'x91097h0_jm1');

        if($mysqli->connect_errno) {
            printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
        }
$mysqli->query("SET NAMES utf8");
$sql = "SELECT id_user, user_name, user_login, user_password, user_e_mail, user_info FROM user_stud_20 WHERE id_user =" . $_GET['id'] . ";";

$user = (object) [
    "id_user" => $_GET['id'],
    "user_name" => "",
    "user_login" => "",
    "user_password" => "",
    "user_e_mail" => "",
    "user_info" => "",
];


if($result=$mysqli->query($sql)){
    $user=$result->fetch_object();
} else{
    echo "Ошибка в запросе $sql<br>";
}
?>
<p>ID пользователя: <?php echo $user->id_user; ?></p>
<form method="post">
    <p>Имя: <input name="name" size="50" type="text" value="<?php echo $user->user_name; ?>"></p>
    <p>Логин: <input name="login" size="20" type="text" value="<?php echo $user->user_login; ?>"></p>
    <p>Пароль: <input name="password" size="20" type="password" value="<?php echo $user->user_password; ?>"></p>
    <p>E-mail: <input name="e-mail" size="30" type="text" value="<?php echo $user->user_e_mail; ?>"></p>
    <p>Информация: <textarea name = "info" rows="4" cols="40"><?php echo $user->user_info; ?></textarea></p>
    <input type="hidden" name="id_user" value="<?php echo $user->id_user;?>">
    <p><button type="submit">Сохранить</button></p>
    <p><button type="reset">Очистить</button></p>
</form>

<a href="index.php">Вернуться к списку пользователей </a>

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


    $update_sql = "UPDATE user_stud_20 SET user_name='" . $_POST['name'] . "', user_login='" . $_POST['login'] . "', user_password='" . $_POST . "', user_login='" . $_POST['login'] . "', user_password='" . $_POST['password'] . "', user_e_mail='" . $_POST['e_mail'] . "', user_info='" . $_POST['info'] . "' WHERE id_user=" . $_POST['id_user'] . ";";

    if($mysqli->query($update_sql)) {
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    } else{
        echo "<p>Ошибка обновления пользователя, возможно данный логин уже используется.</p>";
    }
}

?>
</body>
</html>