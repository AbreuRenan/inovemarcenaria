<?php
if (!$_POST['nome_produto']) {
    exit();
}

echo "<pre>";
echo $_POST['nome_produto'] . "<br><hr>";
var_dump($_FILES['img_produto']) . "<br><hr>";


?>