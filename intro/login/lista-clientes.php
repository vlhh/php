<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
}

$conexao = require('database/config.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('components/js.php') ?>
</head>
<body>

    <div class="container">
    <?php include('menu.php') ?>

        <div class="row">
            <div class="col-md-12">
            <a class='btn btn-block btn-primary' href='clientes.php'> Novo Cliente</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Id cidade</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $stmt = $conexao->prepare("SELECT * FROM clientes ORDER BY nome");
                            $stmt ->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo "<tr> 
                                <td>".$row['nome']."</td>
                                <td>".$row['email']."</td>
                                <td>".$row['telefone']."</td>
                                <td>".$row['data_nascimento']."</td>
                                <td>".$row['id_cidade']."</td>
                                <td>
                                    <a class='btn btn-md btn-success' href='clientes.php?id=".$row['id'] ."'>
                                    <i class='fa fa-edit'></i></a>
                                    <a class='btn btn-md btn-danger' href='actions/deletee.php?id=".$row['id'] ."'>
                                    <i class='fa fa-trash'></i></a>
                                </td>
                                </tr>";

                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>