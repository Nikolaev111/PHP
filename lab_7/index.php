<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Скороходов И.О. #X</title>
</head>
<body>
<h2>Зарегестрированные пользователи:</h2>
<table border="1">
<tr>
    <th> Имя </th>
    <th> E-mail </th>
    <th> Редактировать </th>
    <th> Уничтожить </th>
</tr>

    <?php
    $mysqli = new mysqli('localhost','x91097h0_jm1', 'CEzdE3JzY', 'x91097h0_jm1');
$mysqli->query("SET NAMES utf8");
$sql = "SELECT id_user, user_name, user_e_mail FROM user_stud_20";
if($result=$mysqli->query($sql)){
    printf("Select вернул %d строк.\n", $result->num_rows);
    while($row = $result ->fetch_array()){
        echo "<tr>";
        echo "<td>" . $row['user_name'] . "</td>";
        echo "<td>" . $row['user_e_mail'] . "</td>";
        echo "<td><a href='edit.php?id=" . $row['id_user'] . "'>Редактировать</a></td>";
        echo "<td><a href='delete.php?id=" . $row['id_user'] . "'>Удалить</a></td>";
        echo "<tr>";
    }
    $result->close();
} else{
    echo "Ошибка в запросе $sql";
}

$mysqli->close();

/* $mysqli = new mysqli('localhost','x91097h0_jm1', 'CEzdE3JzY', 'x91097h0_jm1'); // проверка соединения
if ($mysqli->connect_errno){
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
}
//Закрываем соединение
$mysqli->close(); */
?>
</table>
</body>

</html>