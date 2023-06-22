<?php
require_once("querys.php");
header('Content-Type: application/json');

if (isset($_POST['operation'])) {
    $operation = $_POST['operation'];
} else {
    echo json_encode("data operation not received");
    exit;
}

if ($operation == 'select') {
    if (isset($_POST['id'])) {
        $select = listarProdutos($_POST['id']);
        echo json_encode($select);
    } else {
        $select = listarProdutos();
        echo json_encode($select);
    }
}

if ($operation == 'insert') {
    $formData['nome'] = $_POST['nome_produto'];
    $formData['preco'] = $_POST['preco_produto'];
    $formData['descricao'] = $_POST['descricao_produto'];
    $formData['img'] = $_FILES['img_produto'];
    $resuldb = cadastrarProdutos($formData);
    echo json_encode($resuldb);    
}
if ($operation == 'delete') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $resultdb = deletarProduto($id);
    } else {
        $resuldb = 'id não recebido';
    }
    echo json_encode($resultdb);
}
?>