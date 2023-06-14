<?php 
session_start();
$crud = [1 => 'create', 2 => 'read', 3 => 'update', 4 => 'delete'];
if ($_GET['crud']) {
    $msg = $crud[$_GET['crud']];
    echo "<hr><h3>".$msg."</h3><br>";
}


?>