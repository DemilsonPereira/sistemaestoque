<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
    <title>Aprovar Usuário</title>
</head>

<body>
    <?php

    session_start();

    $usuario = $_SESSION['usuario'];

    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php');
    }

    ?>
    <div class="container" style="margin-top: 40px;">
        <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-primary btn-sm">Menu</a>
        </div>
        <h3>Lista de Usuários Inativos</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Nível de acesso</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
            include 'conexao.php';
            $sql = "select * from tbusuario where statususuario = 'Inativo' ";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_usuario = $array['id_usuario'];
                $nomeusuario = $array['nome'];
                $emailusuario = $array['email'];
                $telefoneusuario = $array['telefone'];
                if ($niveldeacesso = $array['niveldeacesso'] == '') {
                    $niveldeacesso = "Indefinido";
                };

            ?>
                <tr>
                    <td> <?php echo $nomeusuario ?></td>
                    <td> <?php echo $emailusuario ?></td>
                    <td> <?php echo $telefoneusuario ?></td>
                    <td> <?php echo $niveldeacesso ?></td>

                    <td>
                        <a class="btn btn-success btn-sm" style="color: #fff;" href="aprovarUsuarioExterno.php?id=<?php echo $id_usuario ?>&niveldeacesso=1" role="button">Administrador</a>
                        <a class="btn btn-warning btn-sm" style="color: #fff;" href="aprovarUsuarioExterno.php?id=<?php echo $id_usuario ?>&niveldeacesso=2" role="button">Funcionario</a>
                        <a class="btn btn-dark btn-sm" style="color: #fff;" href="aprovarUsuarioExterno.php?id=<?php echo $id_usuario ?>&niveldeacesso=3" role="button">Conferente</a>
                        <a class="btn btn-danger btn-sm" style="color: #fff;" href="deletarUsuarioExterno.php?id=<?php echo $id_usuario ?>" role="button">Excluir</a>
                    </td>

                </tr>
            <?php } ?>


        </table>

    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>