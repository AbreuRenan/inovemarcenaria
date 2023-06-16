<?php
require_once("querys.php");
header('Content-Type: application/json');

if (isset($_POST['operation'])) {
    $operation = $_POST['operation'];
} else {
    echo json_encode("data operation not received");
}

if ($operation == 'select') {
    $select = listarProdutos();
    echo json_encode($select);
}

if ($operation == 'insert') {
    $formData['nome'] = $_POST['nome_produto'];
    $formData['preco'] = $_POST['preco_produto'];
    $formData['descricao'] = $_POST['descricao_produto'];
    $formData['img'] = $_FILES['img_produto'];~
    $resuldb['status'] =
    $resuldb['id'] = cadastrarProdutos($formData);
    echo json_encode($resuldb);    
}
if ($operation == 'delete') {
    $id = $_POST['id'];
    $resultdb = deletarProduto($id);
    echo json_encode($resultdb);
}
?>