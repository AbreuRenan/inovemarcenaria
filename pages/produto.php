<?php 
require_once('../src/querys.php');
session_start();
$crud = [1 => 'create', 2 => 'read', 3 => 'update', 4 => 'delete'];
if ($_GET['crud'] == 2) {
    $produto = listarProdutos($_GET['id'])[0];
}
?>
<?php require_once('header-dashboard.php') ?>
<div class="card">
  <img src="<?= $produto['img']; ?>" class="card-img-top imgSize-5" alt="<?= $produto['nome']; ?>">
  <div class="card-body">
    <h5 class="card-title"><?= $produto['nome']; ?></h5>
    <p class="card-text"><?= $produto['preco']; ?></p>
    <p class="card-text"><?= $produto['descricao']; ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>