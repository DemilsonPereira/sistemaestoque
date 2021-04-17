<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Menu Formulário de Cadastro</title>
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

<body style="background-color: aquamarine;">

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

    <div class="container" style="margin-top: 50px;">

        <div style="text-align: right; font-size: 20px">
            <b><a id='sair' href='logout.php'>Sair</a></b>
        </div>


        <div class="nome-estoque">
            <center>
                <h1>Sistema de Estoque</h1>
            </center>
        </div>
        <div style="margin-top: 50px;">
            <div class="row">

                <?php
                if (($nivel == 1) || ($nivel == 2)) {

                ?>

                    <div class="col-sm-6" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Adicionar Produtos</h5>
                                <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
                                <a href="adicionarProduto.php" class="btn btn-primary btn-sm">Cadastrar</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-sm-6" style="margin-top: 20px;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lista de Produtos</h5>
                            <p class="card-text">Visualizar, editar e excluir os produtos.</p>
                            <a href="listarProduto.php" class="btn btn-primary btn-sm">Produto</a>
                        </div>
                    </div>
                </div>
                <?php
                if (($nivel == 1) || ($nivel == 2)) {

                ?>
                    <div class="col-sm-6" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Adicionar Categoria</h5>
                                <p class="card-text">Opção para adicionar categoria de produtos.</p>
                                <a href="adicionarCategoria.php" class="btn btn-primary btn-sm">Cadastrar</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-sm-6" style="margin-top: 20px;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lista de Categorias</h5>
                            <p class="card-text">Visualizar, editar e excluir as categorias.</p>
                            <a href="listarCategoria.php" class="btn btn-primary btn-sm">Categoria</a>
                        </div>
                    </div>
                </div>
                <?php
                if (($nivel == 1) || ($nivel == 2)) {

                ?>
                    <div class="col-sm-6" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Adicionar Fornecedor</h5>
                                <p class="card-text">Opção para adicionar categoria de produtos.</p>
                                <a href="adicionarFornecedor.php" class="btn btn-primary btn-sm">Cadastrar</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-sm-6" style="margin-top: 20px;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lista de Fornecedores</h5>
                            <p class="card-text">Visualizar, editar e excluir os fornecedores.</p>
                            <a href="listarFornecedor.php" class="btn btn-primary btn-sm">Fornecedor</a>
                        </div>
                    </div>
                </div>
                <?php
                if ($nivel == 1) {

                ?>
                    <div class="col-sm-6" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastrar Usuários</h5>
                                <p class="card-text">Cadastrar usuários.</p>
                                <a href="cadastroUsuario.php" class="btn btn-primary btn-sm">Cadastrar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Aprovar Usuários</h5>
                                <p class="card-text">Aprovar usuários cadastrados.</p>
                                <a href="aprovarUsuario.php" class="btn btn-primary btn-sm">Aprovar</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-sm-6" style="margin-top: 20px;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Listar Usuários</h5>
                            <p class="card-text">Visualizar, editar e excluir os usuários.</p>
                            <a href="listarUsuario.php" class="btn btn-primary btn-sm">Usuário</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="container-fluid" id="container-rodape">
            <div class="container">
                <div class="row">
                    <div class="col-sx-12 col-sm-12 col-md-4 col-lg-4">
                        <p><span class="glyphicon glyphicon-bishop">Canal Demilson Pereira</span></p>
                    </div>
                    <div class="col-sx-12 col-sm-12 col-md-4 col-lg-4">
                        <p>&reg; copyright 2020 Canal Demilson Pereira</p>
                    </div>
                    <div class="col-sx-12 col-sm-12 col-md-4 col-lg-4">
                        <p>Redes sociais <a href="http://www.facebook.com">Facebook</a> <a href="http://www.youtube.com">YouTube</a></p>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        $(function() {
            $('#sair').on('click', function(event) {

                if (!confirm('Pressione "OK" se deseja realmente sair.'))
                    event.preventDefault();
            });
        });
    </script>


</body>


</html>