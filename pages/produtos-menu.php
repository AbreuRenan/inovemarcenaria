<div id="menu-home">
<ul class="nav nav-tabs gap-1" id="productTabs">
    <button class="nav-link active" id="cad-tab" data-bs-toggle="tab" data-bs-target="#cad-tab-pane" type="button"
        role="tab">
        Cadastrar Produto</button>
    <button class="nav-link" id="show-tab" data-bs-toggle="tab" data-bs-target="#show-tab-pane" type="button"
        role="tab">
        Exibir Produtos</button>
</ul>
<div class="container-fluid bg-white border border-top-0">
    <!-- Aba cadastro -->
    <div class="tab-content" id="productTabsContent">
        <div class="tab-pane fade show active" id="cad-tab-pane">
            <!-- Form inserção produtos -->
            <form id="form_cad_produto" action="main.php" method="POST" class="container p-2"
                enctype="multipart/form-data">
                <div class="col row">
                    <div class="col-8 d-flex flex-column gap-2">
                        <label class="form-label" for="nome_produto">Nome Produto</label>
                        <input class="form-control" type="text" name="nome_produto" id="nome_produto"
                            placeholder="Digite o nome do produto para cadastro">
                        <label class="form-label" for="preco_produto">Preço Inicial</label>
                        <input class="form-control" type="money" name="preco_produto" id="preco_produto">
                    </div>
                    <div class="col-4">
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
                    <textarea id="descricao_produto" name="descricao_produto" rows="4" cols="50"
                        class="form-control"></textarea>
                </div>
                <div class="col row p-2">
                    <input type="submit" value="enviar" class="btn btn-primary">
                </div>
            </form>
            <!-- FIM Form inserção produtos -->
        </div>
        <!-- Fim aba cadastro -->
        <!-- Aba exibir -->
        <div class="tab-pane fade" id="show-tab-pane">
            <ul class="list-group p-5">
            </ul>
        </div>
        <!-- Fim aba exibir -->
    </div>
</div>
</div>