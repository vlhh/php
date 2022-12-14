<?php
session_start();

$conexao = require('../database/config.php');

$tabela = $_GET['cidade'];
$chave = $_GET['id'];

$sql = "UPDATE" . $tabela . "SET cliente WHERE id = ?";
$stmt = $conexao->prepare($sql);
$return = $stmt->execute([$chave]);

if ($return){
    $_SESSION['sucesso'] = "Registro excluido com sucesso!";
    header('Location:../index.php');
    exit();
}




