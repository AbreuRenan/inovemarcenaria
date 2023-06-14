<?php 
if (empty($_SERVER['HTTP_REFERER'])) {
    session_start();
    session_destroy();
    header('Location: ../login.php?error=401');
    exit();
}
$dbURL = '../files/db_test.db';

function conectarBanco()
{
    $pdo = new PDO("sqlite:../files/db_test.db");
    return $pdo;
}
?>