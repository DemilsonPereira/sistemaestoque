<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Sistem de Estoque</title>
</head>

<style type="text/css">
    #tamanhoContainer {
        width: 350px;
    }

    #botao {
        background-color: #ff1168;
        color: #ffffff;
        -webkit-box-shadow: 10px 10px 28px -5px rgba(194, 194, 194, 1);
        -moz-box-shadow: 10px 10px 28px -5px rgba(194, 194, 194, 1);
        box-shadow: 10px 10px 28px -5px rgba(194, 194, 194, 1);
    }
</style>

<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3;">
        <div style="padding: 10px;">
            <center>
                <img src="img/lock.png" width="125px" height="125px" alt="">
            </center>
            <form action="index1.php" method="post">
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" name="usuario" class="form-control" placeholder="E-mail" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
                </div>
                <div style="text-align: right; margin-top: 30px;">
                    <button type="submit" class="btn btn-sm btn-success">Entrar</button>
                </div>
            </form>
        </div>
    </div>

    <div style="margin-top: 10px;">
        <center>
            <small>Você não possui cadastro? Clique <a href="cadastroUsuarioExterno.php">Aqui</a></small>
        </center>
    </div>

    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>