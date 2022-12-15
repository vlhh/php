<?php
session_start();

$conexao = require('../database/config.php');


$chave = $_GET['id'];

$sql = "DELETE from clientes where id = '" .$_GET['id']."'";
$stmt = $conexao->prepare($sql);
$return = $stmt->execute([$chave]);

if ($return){
    $_SESSION['sucesso'] = "Registro excluido com sucesso!";
    header('Location:../index.php');
    exit();
}
