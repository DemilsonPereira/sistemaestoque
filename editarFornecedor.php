<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Formulário de Edição</title>
</head>

<style type="text/css">
    #tamanhoContainer {
        width: 500px;
    }

    #botao {
        background-color: #ff1168;
        color: #ffffff;
    }
</style>

<body>
    <?php

    session_start();

    $usuario = $_SESSION['usuario'];

    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php');
    }

    ?>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <div style="text-align: right;">
            <a href="listarCategoria.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
        </div>
        <h4>Edição de Categoria</h4>
        <form action="atualizarFornecedor.php" method="POST" style="margin-top: 20px;">
            <?php
            $sql = "select * from tbfornecedor where id_fornecedor = $id";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_fornecedor = $array['id_fornecedor'];
                $nomefornecedor = $array['nome'];

            ?>

                <div class="form-group">
                    <label>Nome do Categoria</label>
                    <input type="text" name="nomefornecedor" class="form-control" value="<?php echo $nomefornecedor ?>" autocomplete="off">
                    <input type="text" name="id" class="form-control" value="<?php echo $id_fornecedor ?>" style="display:none">
                </div>
                <div style="text-align: right;">
                    <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
                </div>
            <?php } ?>
        </form>
    </div>




    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>