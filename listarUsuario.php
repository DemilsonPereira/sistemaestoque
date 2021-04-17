<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
    <title>Listagem de Usuários</title>
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
    <div class="container" style="margin-top: 40px;">
        <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-primary btn-sm">Menu</a>
        </div>
        <h3>Lista de Usuário</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Nível de Acesso</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM tbusuario WHERE statususuario = 'Ativo' order by nome ASC";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_usuario = $array['id_usuario'];
                $nome = $array['nome'];
                $email = $array['email'];
                $telefone = $array['telefone'];
                if ($niveldeacesso = $array['niveldeacesso'] == 1) {
                    $niveldeacesso = "Administrador";
                } elseif ($niveldeacesso = $array['niveldeacesso'] == 2) {
                    $niveldeacesso = "Funcionário";
                } elseif ($niveldeacesso = $array['niveldeacesso'] == 3) {
                    $niveldeacesso = "Conferente";
                };
                $statususuario = $array['statususuario'];

            ?>
                <tr>
                    <td> <?php echo $nome ?></td>
                    <td> <?php echo $email ?></td>
                    <td> <?php echo $telefone ?></td>
                    <td> <?php echo $niveldeacesso ?></td>
                    <td> <?php echo $statususuario ?></td>
                    <td>
                      <?php
                        if ($nivel == 1) {

                        ?>
                        <a class="btn btn-warning btn-sm" style="color: #fff;" href="editarUsuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                        
                        <a class="btn btn-danger btn-sm" style="color: #fff;" href="deletarUsuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                        <?php } ?>
                    </td>

                </tr>
            <?php } ?>


        </table>

    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>