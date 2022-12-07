<?php
session_start();
//abrir uma conexão com o banco de dados
$conexao = require('../database/config.php');

//verifica se o tipo esta definido
if(isset($_GET['tipo']) == false){
    header('Location: ../index.php');
}
$tipo = $_GET['tipo'];

//cadastro de cliente
    if ($tipo == 'cliente') {

        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
    
        if (!isset($nome) || $nome == '') {
            $_SESSION['erro'] = "Informe um nome para o cliente";
            header('Location: ../clientes.php');
            exit();
        }
    
        if (isset($id) && $id != '') {
            $sql = "UPDATE clientes SET nome = ?, email = ? WHERE id = ?";
            $stmt = $conexao->prepare($sql);
            $return = $stmt->execute([$nome,$email,$id]);
    
            if ($return) {
                $_SESSION['sucesso'] = "Cliente alterado com sucesso!";
                header('Location: ../lista-clientes.php');
                exit();
            }
        } else {
            $sql = "INSERT INTO clientes (nome),(email) VALUES(?,?)";
            $stmt = $conexao->prepare($sql);
            $return = $stmt->execute([$nome, $email]);
    
            if ($return) {
                $_SESSION['sucesso'] = "Cliente incluído com sucesso!";
                header('Location: ../lista-clientes.php');
                exit();
            }
        }
    
    } else {
        header('Location: ../index.php');
        exit();
    }



