<?php
$mysqli = new mysqli('localhost','x91097h0_jm1', 'CEzdE3JzY', 'x91097h0_jm1');

if($mysqli->connect_errno){
    printf("Не удалось подключиться: %s\n", $mysql->connect_error);
}

$delete_sql = "DELETE FROM user_stud_20 WHERE id_user=" . $_GET['id'];

if($mysqli->query($delete_sql)) {
    header("Location: index.php");
    exit;
} else{
    echo "Ошибка в запросе $delete_sql<br>";
}
?>