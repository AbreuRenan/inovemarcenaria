<?php
require_once('../src/querys.php');
session_start();
$crud = [1 => 'create', 2 => 'read', 3 => 'update', 4 => 'delete'];
if ($_GET['crud'] == 2 || $_GET['crud'] == 3) {
  $produto = listarProdutos($_GET['id'])[0];
}
?>
<?php require_once('header-dashboard.php') ?>
<div class="col"></div>
<div class="col mx-auto bg-light p-5">
  <form id="form_cad_produto" action="../src/produtos_crud.php" method="POST" class="container p-2"
    enctype="multipart/form-data">
    <div class="col row  ">
      <div class="col-8 d-flex flex-column gap-2">
        <label class="form-label" for="nome_produto">Nome Produto</label>
        <input class="form-control" type="text" name="nome_produto" id="nome_produto" value="<?= $produto['nome']; ?>">
        <label class="form-label" for="preco_produto">Preço Inicial</label>
        <input class="form-control" type="money" name="preco_produto" id="preco_produto"
          value="<?= $produto['preco']; ?>">
      </div>
      <div class="col-4">
        <div id="img_preview_container">
          <img id="img_preview" src="<?= $produto['img']; ?>" alt="" class="w-100"
            style="height: 120px; object-fit: cover;">
        </div>
        <label for="img_produto" class="form-label btn btn-secondary mt-2 w-100">Carregar
          Foto</label>
        <input type="file" name="img_produto" id="img_produto" style="visibility:hidden;">
      </div>
    </div>
    <div class="col row p-2">
      <label for="descricao_produto">Descrição do Produto</label>
      <textarea id="descricao_produto" name="descricao_produto" rows="4" cols="50"
        class="form-control"><?= $produto['descricao']; ?></textarea>
    </div>
    <div class="col row p-2">
      <input type="submit" value="enviar" class="btn btn-primary">
    </div>
    <input type="hidden" value="insert" name="operation">
  </form>
</div>