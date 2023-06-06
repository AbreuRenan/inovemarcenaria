<?php 
if (!isset($_GET['login'])) {
    header('location: ./login.php?error=401');
}
?>

<h1>Painel</h1>
<hr>
<h3><?= $greetings ?></h3>