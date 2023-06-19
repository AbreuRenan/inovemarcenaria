<?php
session_start();
require_once('../src/db.php');
$db = conectarBanco();

?>
<?php require_once('header-dashboard.php') ?>
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
    <div class="bg-light main-grid p-3 rounded-start-4">
        <!-- Main area de exbição -->
        <?php require_once('home-menu.php');?>
        <?php require_once('produtos-menu.php');?>
        <?php require_once('opcoes-menu.php');?>
        <!-- FIM Main area de exbição -->
    </div>
</body>
<script type="module" src="../js/dashboard.js"></script>
</div>