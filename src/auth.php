<?php
session_start();
if (isset($_POST['username'])) {
    if ($_POST['password'] == 'pass123') {
        $_SESSION['senha'] = $_POST['password'];
        $_SESSION['user'] = $_POST['username'];
        header('location: dashboard.php?login=1');
    } else {
        header('location: ../login.php?error=401');
    }
}

?>