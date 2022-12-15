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
        $telefone = $_POST["telefone"];
        $data_nascimento = $_POST["data_nascimento"];
        $id_cidade = $_POST["id_cidade"];
    
        if (!isset($nome) || $nome == '') {
            $_SESSION['erro'] = "Informe um nome para o cliente";
            header('Location: ../clientes.php');
            exit();
        }

        if (!isset($email) || $email == '') {
            $_SESSION['erro'] = "Informe um email para o cliente";
            header('Location: ../clientes.php');
            exit();
        }

        if (!isset($telefone) || $telefone == '') {
            $_SESSION['erro'] = "Informe um telefone para o cliente";
            header('Location: ../clientes.php');
            exit();
        }

        if (!isset($data_nascimento) || $data_nascimento == '') {
            $_SESSION['erro'] = "Informe uma data para o cliente";
            header('Location: ../clientes.php');
            exit();
        }

        if (isset($id) && $id != '') {
            $sql = "UPDATE clientes SET nome = ?, email = ? , telefone = ?, data_nascimento = ?, id_cidade = ? WHERE id = ?";
            $stmt = $conexao->prepare($sql);
            $return = $stmt->execute([$nome, $email, $telefone, $data_nascimento, $id_cidade, $id]);
    
            if ($return) {
                $_SESSION['sucesso'] = "Cliente alterado com sucesso!";
                header('Location: ../lista-clientes.php');
                exit();
            }
        } else {
            $sql = "INSERT INTO clientes (nome, email, telefone, data_nascimento, id_cidade) VALUES(?,?,?,?,?)";
            $stmt = $conexao->prepare($sql);
            $return = $stmt->execute([$nome, $email, $telefone, $data_nascimento, $id_cidade]);
    
            if ($return) {
                $_SESSION['sucesso'] = "Cliente incluído com sucesso!";
                header('Location: ../lista-clientes.php');
                exit();
            }
        }
    
    }else if ($tipo == 'cidade'){

        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $sigla_estado = $_POST["sigla_estado"];
    
        if (!isset($nome) || $nome == '') {
            $_SESSION['erro'] = "Informe um nome para o cliente";
            header('Location: ../cidade.php');
            exit();
        }
    
        if (isset($id) && $id != '') {
            $sql = "UPDATE cidade SET nome = ?, sigla_estado = ? WHERE id = ?";
            $stmt = $conexao->prepare($sql);
            $return = $stmt->execute([$nome,$sigla_estado,$id]);
    
            if ($return) {
                $_SESSION['sucesso'] = "Cliente alterado com sucesso!";
                header('Location: ../lista-cidade.php');
                exit();
            }
        } else {
            $sql = "INSERT INTO cidade (nome,sigla_estado) VALUES(?,?)";
            $stmt = $conexao->prepare($sql);
            $return = $stmt->execute([$nome,$sigla_estado]);
    
            if ($return) {
                $_SESSION['sucesso'] = "Cidade incluído com sucesso!";
                header('Location: ../lista-cidade.php');
                exit();
            }
        }
    

    } else{
        header('Location: ../index.php');
        exit();
    }
