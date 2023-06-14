<?php
require_once("querys.php");
header('Content-Type: application/json');

if ($_POST['operation'] == 'select') {
    $select = listarProdutos();
    echo json_encode($select);
}

if ($_POST['operation'] == 'insert') {
    $formData['nome'] = $_POST['nome_produto'];
    $formData['preco'] = $_POST['preco_produto'];
    $formData['descricao'] = $_POST['descricao_produto'];
    $formData['img'] = $_FILES['img_produto'];
    cadastrarProdutos($formData);

}
?>