<?php 
require_once('db.php');
function show($args) {
    echo '<pre>';
    print_r($args);
    echo '</pre>';
}
function salvarIMG($file){
    $img_path = "../img/uploads/" . basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $img_path);
    return $img_path;
}
function listarProdutos($id = null) {
    $pdo = conectarBanco();
    if($id) {
        $query = $pdo->prepare('SELECT * FROM produtos WHERE id = :id');
        $query->bindValue(':id', $id);
    } else {
        $query = $pdo->prepare('SELECT * FROM produtos');
    }
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function cadastrarProdutos($data) {
    $imgURL = salvarIMG($data['img']);
    $pdo = conectarBanco();
    $query = $pdo->prepare('INSERT INTO produtos (nome, preco, descricao, img) VALUES (:n, :p, :d, :img)');
    $query->bindValue(':n', $data['nome'] );
    $query->bindValue(':p', $data['preco'] );
    $query->bindValue(':d', $data['descricao'] );
    $query->bindValue(':img', $imgURL );
    $query->execute();
    $lastInsert = $pdo->lastInsertId();
    return $lastInsert;
}
?>