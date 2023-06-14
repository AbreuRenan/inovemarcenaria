<div id="main-home" class="fade" style="display:none">
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
                <?php require_once('../src/formCadProd.php') ?>
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