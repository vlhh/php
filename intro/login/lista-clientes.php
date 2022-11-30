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
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"&gt;>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
    <?php include('menu.php') ?>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
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
                                <td>
                                    <a class='btn btn-md btn-success' href='clientes.php?id=".$row['id'] ."'>
                                    <i class='fa fa-edit'></i></a>
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