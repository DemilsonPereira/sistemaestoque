<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Cadastro de Categoria</title>

    <style type="text/css">
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
    <div class="container" style="margin-top: 40px; width: 500px;">
        <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-primary btn-sm">Menu</a>
        </div>
        <center>
            <h4>Cadastro de Categoria</h4>
        </center>
        <form action="inserirCategoria.php" method="POST" style="margin-top: 20px;">
            <div class="form-group">
                <label>Categoria</label>
                <input type="text" name="categoria" class="form-control" placeholder="Digite o nome da categoria" autocomplete="off" required>
            </div>
            <div style="text-align: right;">
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>