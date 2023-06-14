<?php
session_start();
require_once('../src/db.php');
$db = conectarBanco();

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
    <div class="bg-light main-grid p-3 rounded-start-4"> <!-- Main area de exbição -->
    <?php require_once('produtos-menu.php') ?>
    </div><!-- FIM Main area de exbição -->

</body>
<script src="../js/dashboard.js"></script>
</div>