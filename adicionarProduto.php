<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Formulário de Cadastro</title>

    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }

        #botao {
            background-color: #ff1168;
            color: #ffffff;
        }
    </style>
</head>

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
            <a href="menu.php" role="button" class="btn btn-primary btn-sm">Menu</a>
        </div>
        <h4>Formulário de Cadastro</h4>
        <form action="inserirProduto.php" method="POST" style="margin-top: 20px;">
            <div class="form-group">
                <label>Número do Produto</label>
                <input type="number" min="0" name="nroproduto" class="form-control" placeholder="Insira o número do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" name="nomeproduto" class="form-control" placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria" autocomplete="off" required>

                    <?php
                    include 'conexao.php';
                    $sql = "select * from tbcategoria order by nome ASC";
                    $buscar = mysqli_query($conexao, $sql);
                    while ($array = mysqli_fetch_array($buscar)) {
                        $id_categoria = $array['id_categoria'];
                        $nomeCategoria = $array['nome'];
                    ?>
                        <option><?php echo $nomeCategoria ?></option>

                    <?php } ?>

                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" min="0" name="quantidade" class="form-control" placeholder="Insira a quantidade do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" autocomplete="off" required>

                    <?php
                    include 'conexao.php';
                    $sql = "select * from tbfornecedor order by nome ASC";
                    $buscar = mysqli_query($conexao, $sql);
                    while ($array = mysqli_fetch_array($buscar)) {
                        $id_fornecedor = $array['id_fornecedor'];
                        $nomeFornecedor = $array['nome'];
                    ?>
                        <option><?php echo $nomeFornecedor ?></option>

                    <?php } ?>

                </select>
            </div>
            <div style="text-align: right;">
                <button type="reset" id="botao" class="btn btn-sm">Limpar</button>
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>




    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>