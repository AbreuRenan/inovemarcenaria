<?php
session_start();
require_once('../src/db.php');
$db = conectarBanco();
$greetings = 'Bem vindo ' . $_SESSION['user'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/utility.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/13ee905353.js" crossorigin="anonymous"></script>

    <title>Inove Marcenária</title>
</head>

<body id="dash-body" class="grid container-fluid bg-dark ps-0 pe-0 h-100">
    <div class="bg-dark text-light header-grid">div 1</div>
    <div class="bg-dark sidenav-grid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ps-4 py-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-header"
                aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-header">
                <ul class="navbar-nav mr-auto gap-3 d-flex flex-column w-100">
                    <li class="nav-item active">
                        <a id="menu-home" class="nav-link" href="#menu-home">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a id="menu-produtos" class="nav-link" href="#menu-produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a id="menu-opcoes" class="nav-link" href="#menu-opcoes">Opções</a>
                    </li>
                    <li class="nav-item">
                        <a id="menu-sair" class="nav-link" href="../src/auth.php?cod=2">Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Main area de exbição -->
    <div class="bg-light main-grid p-3 rounded-start-4">
        <ul class="nav nav-tabs gap-1" id="productTabs">
            <button class="nav-link active" id="cad-tab" data-bs-toggle="tab" data-bs-target="#cad-tab-pane"
                type="button" role="tab">
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
                    <form id="form_cad_produto" class="container p-2" enctype="multipart/form-data">
                        <!-- action="main.php" method="POST" -->
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
                                    <img id="img_preview" src="" alt="" class="w-100"
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
                        <li class="d-flex list-group-item justify-content-between">
                            <a href="produto.php">An item</a>
                            <div class="icons d-flex gap-3 align-items-center">
                                <a href="produto.php?crud=4&id=1">
                                    <i class="fa-solid fa-trash text-danger"></i>
                                </a>
                                <a href="produto.php?crud=3&id=1">
                                    <i class="fa-solid fa-pen text-primary"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Fim aba exibir -->
            </div>
        </div>
        <!-- FIM Form inserção produtos -->
    </div>
    <!-- FIM Main area de exbição -->

</body>
<script src="../js/dashboard.js"></script>
</div>