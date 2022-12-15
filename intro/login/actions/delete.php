<?php
session_start();

$conexao = require('../database/config.php');


$chave = $_GET['id'];

$sql = "DELETE from cidade where id = '" .$_GET['id']."'";
$stmt = $conexao->prepare($sql);
$return = $stmt->execute([$chave]);

if ($return){
    $_SESSION['sucesso'] = "Registro excluido com sucesso!";
    header('Location:../lista-cidade.php');
    exit();
}

