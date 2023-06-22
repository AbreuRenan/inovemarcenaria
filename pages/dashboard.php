<?php
session_start();
require_once('../src/db.php');
$db = conectarBanco();

?>
<?php require_once('header-dashboard.php') ?>
<?php require_once('sidenav-dashboard.php') ?>
    <div class="bg-light main-grid p-3 rounded-start-4">
        <!-- Main area de exbição -->
        <?php require_once('home-menu.php'); ?>
        <?php require_once('produtos-menu.php'); ?>
        <?php require_once('opcoes-menu.php'); ?>
        <!-- FIM Main area de exbição -->
    </div>
    <script type="module" src="../js/dashboard.js"></script>

</body>