<?php
require_once("db.php");
header('Content-Type: application/json');
function salvarIMG($file)
{
    $target_file = "../img/uploads/" . basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $target_file);
}
if ($_POST['operation'] == 'select') {
    $pdo = conectarBanco();
    $query = $pdo->prepare('SELECT * FROM produtos');
    $query->execute();
    echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
}
?>