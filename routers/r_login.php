<?php
include_once '../controllers/C_login.php';

$login = new C_login();

try {

    // login
    if ($_GET['aksi'] == 'login') {

        // $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        // $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $username = $_POST['username'];
        $password = $_POST['password'];

        $login->login_role($username, $password);

        // logout   
    } elseif ($_GET['aksi'] == 'logout') {

        $login->logout();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
