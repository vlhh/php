
<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
}

$conexao = require('database/config.php');

$cliente = null;
if(isset($_GET["id"])){

    $id = $_GET["id"];

    $sql ="SELECT * FROM clientes WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":id", $id);

    $stmt->execute(); 
    $retorno = $stmt->fetch(PDO::FETCH_ASSOC); 
    if($retorno){
        $cliente = $retorno;
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"&gt;>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <div class="container">
    <?php include('menu.php')?>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
            <form method="post" action="actions/actions.php?tipo=cliente" >

            <input type="hidden" name="id" class="form-control" value="<?php echo ($cliente !=null ? $cliente['id'] : '') ?>"/>

            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="<?php echo ($cliente !=null ? $cliente['nome'] : '') ?>"/>

            <label>E-mail</label>
            <input type="email" name="email" class="form-control" value="<?php echo ($cliente !=null ? $cliente['email'] : '') ?>"/>

            <input class="btn btn-warning" value=Limpar type="reset">
            <button class="btn btn-primary" type="submit">Salvar</button>

            </form>
            </div>
        </div>
    </div>

    
    </div>
</body>
</html>