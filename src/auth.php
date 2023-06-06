<?php
$password = $_POST['password'];
if (isset($username)) {
    if ($password == 'pass123') {
        header('location: dashboard.php?login=1');
    } else {
        header('location: dashboard.php?error=401');
    }
}

?>