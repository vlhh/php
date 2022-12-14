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
            <a class='btn btn-block btn-primary' href='cidade.php'> Nova Cidade</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Sigla</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $stmt = $conexao->prepare("SELECT * FROM cidade ORDER BY nome");
                            $stmt ->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo "<tr> 
                                <td>".$row['nome']."</td>
                                <td>".$row['sigla_estado']."</td>
                                <td>
                                    <a class='btn btn-md btn-success' href='cidade.php?id=".$row['id'] ."'>
                                    <i class='fa fa-edit'></i></a>
                                    <a class='btn btn-md btn-danger' href='actions/delete.php?id=".$row['id'] ."'>
                                    <i class='fa fa-trash' ></i></a>
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