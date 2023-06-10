<?php 
$dbURL = '../files/db_test.db';
if (empty($_SERVER['HTTP_REFERER'])) {
    echo "<h1> Diretamente </h1>";
    session_start();
    echo $_SESSION['user'];
    session_destroy();
    header('Location: ../login.php?error=401');
    exit;
}

// Restante do código do seu script PHP
function conectarBanco()
{
    $conexaoDB = new SQLite3('../files/db_test.db');
    return $conexaoDB;
}
function consultarDB($tabela) {
    $db = conectarBanco();
    $select = $db->query("select * from $tabela");
    return $select;
}
?>