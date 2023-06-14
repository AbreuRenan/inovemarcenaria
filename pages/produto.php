<?php 
session_start();
// $crud = [1 => 'create', 2 => 'read', 3 => 'update', 4 => 'delete'];
// if ($_GET['crud']) {
//     $msg = $crud[$_GET['crud']];
//     echo $msg."<br>";
// }

if ($_POST) {
    echo json_encode('Chegou o post');
} else {
    echo json_encode('não chegou o post');
}
?>