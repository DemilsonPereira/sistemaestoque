<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
    <title>Listagem de Categorias</title>
</head>

<body>
    <?php

    session_start();

    $usuario = $_SESSION['usuario'];

    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php');
    }

    include 'conexao.php';

    $sql = "SELECT niveldeacesso FROM tbusuario WHERE email = '$usuario' AND statususuario = 'Ativo' ";
    $buscar = mysqli_query($conexao, $sql);
    $array = mysqli_fetch_array($buscar);
    $nivel = $array['niveldeacesso'];

    ?>
    <div class="container" style="margin-top: 40px; width: 500px;">
        <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-primary btn-sm">Menu</a>
        </div>
        <h3>Lista de Categorias</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome da Categoria</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
            include 'conexao.php';
            $sql = "select * from tbcategoria";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_categoria = $array['id_categoria'];
                $nomecategoria = $array['nome'];

            ?>
                <tr>
                    <td> <?php echo $nomecategoria ?></td>
                    <td>
                        <?php
                        if (($nivel == 1) || ($nivel == 2)) {

                        ?>
                        <a class="btn btn-warning btn-sm" style="color: #fff;" href="editarCategoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                        <?php } 
                            if($nivel == 1){
                        ?>
                        <a class="btn btn-danger btn-sm" style="color: #fff;" href="deletarCategoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                        <?php } ?>
                    </td>

                </tr>
            <?php } ?>


        </table>

    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>