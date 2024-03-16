<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema simples de login com PHP</title>
</head>

<body>
    <?php

    if (!isset($_SESSION['login'])) {

        if (isset($_POST['acao'])) {
            $login = 'walter';
            $senha = 'dev123';

            $loginForm = $_POST['login'];
            $senhaForm = $_POST['senha'];

            if ($login == $loginForm && $senha == $senhaForm) {
                $_SESSION['login'] = $login;
                header("Location: index.php"); 
                exit; 
            } else {
                echo 'Dados inválidos';
            }
        }

        include('login.php');
    } else {
        if (isset($_GET['logout'])) {
            session_unset();
            session_destroy();
            header("Location: index.php");
            exit;
        }
        include('home.php');
    }
    ?>
</body>

</html>
