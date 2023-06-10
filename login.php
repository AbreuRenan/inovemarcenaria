<?php 
$errorset = false;
$erromsg = [
    401 => 'Não autorizado',
    402 => 'Logout com Sucesso'
];
if(isset($_GET['error'])) {
    $errorcod = $_GET['error'];
    $errorset = true;
    if (!array_key_exists($errorcod, $erromsg)) {
        $errorcod = 401;
    }
}

require_once('./pages/header.php');
?>

<body class="login-body container-fluid p-5 d-flex justify-content-center align-items-center">
    <a class="login-voltar btn btn-outline-light" href="index.php">Voltar</a>
    <form action="./src/auth.php" method="POST" class="mt-5">
        <div class="container d-flex justify-content-center">
            <div class="card login-card">
                <div class="card-body input-group d-flex flex-column align-items-center gap-2">
                    <h5 class="card-title text-center p-3">Login</h5>
                    <div class="d-flex gap-3 flex-column mx-2 mt-3">
                        <input type="text" id="username" name="username" placeholder="Nome de usuário" class="form-control">
                        <input type="password" id="password" name="password" placeholder="Senha" class="form-control">
                        <div class="form-control border-0 d-flex justify-content-between p-0 gap-1 pb-3">
                            <button type="submit" class="btn btn-dark">Login</button>
                            <button type="reset" class="btn btn-outline-secondary flex-grow-1">Cancelar</button>
                        </div>
                        <?php 
                            if ($errorset) { ?>
                                <div class="d-flex <?php if ($errorcod == 401) {echo 'bg-danger-subtle';} else { echo 'bg-success-subtle';} ?> justify-content-center align-items-center rounded p-1  mt-3">
                                    <p class=<?php if ($errorcod == 401) {echo 'text-danger'; } else { echo 'text-success'; } ; ?>><?= $erromsg[$errorcod] ?></p>
                                </div>
                            <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>