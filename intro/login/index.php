<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
}

?>

<head>
    <?php include('components/js.php') ?>
</head>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include('components/js.php') ?>
</head>
<body>
    <?php include('menu.php') ?>

    <button class="btn btn-danger" onclick="confirmar_logout()">SAIR</button>
</body>
</html>