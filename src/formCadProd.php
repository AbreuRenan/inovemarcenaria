<form id="form_cad_produto" class="container p-2" enctype="multipart/form-data" action="../src/produtos_crud.php" method="POST">
    <div id="statusmsg" class="statusmsg alert" style="display: none"></div>
    <div class="col row row-cols-1 row-cols-sm-2">
        <div class="col col-sm-8 d-flex flex-column gap-2">
            <label class="form-label" for="nome_produto">Nome Produto</label>
            <input class="form-control" type="text" name="nome_produto" id="nome_produto"
                placeholder="Digite o nome do produto para cadastro">
            <label class="form-label" for="preco_produto">Preço Inicial</label>
            <input class="form-control" type="money" name="preco_produto" id="preco_produto">
        </div>
        <div class="col col-sm-4 ">
            <div id="img_preview_container">
                <img id="img_preview" src="" alt="" class="w-100" style="height: 120px; object-fit: cover;">
            </div>
            <label for="img_produto" class="form-label btn btn-secondary mt-2 w-100">Carregar
                Foto</label>
            <input type="file" name="img_produto" id="img_produto" style="visibility:hidden;">
        </div>
    </div>
    <div class="col row p-2">
        <label for="descricao_produto">Descrição do Produto</label>
        <textarea id="descricao_produto" name="descricao_produto" rows="4" cols="50" class="form-control"></textarea>
    </div>
    <div class="col row p-2">
        <input type="submit" class="btn btn-primary">
    </div>
    <input type="hidden" value="insert" name="operation">
</form>