<?php 

function conectarBanco() {
    $dbURL = 'sqlite:' . dirname(__FILE__) . 'files\db_test.db';
    try {
        $pdo = new PDO('sqlite:../files/db_test.db');
    } catch (\Throwable $e) {
        try {
            $pdo = new PDO('sqlite:./files/db_test.db');
        } catch (\Throwable $e) {
            throw $e;
        }
    }
    return $pdo;
}
?>