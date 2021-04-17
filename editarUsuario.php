<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Sistema de Estoque</title>
</head>

<style type="text/css">
    #tamanhoContainer {
        width: 400px;
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
    <div class="container" id="tamanhoContainer" style="margin-top: 40px; border-radius: 15px; border: 2px solid #f3f3f3;">
        <div style="text-align: right; padding: 10px;">
            <a href="listarUsuario.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
        </div>
        <div style="margin-top: 20px;">
            <center>
                <h4>Atualização de Usuário</h4>
            </center>
        </div>

        <div style="padding: 10px;">

            <form action="atualizarUsuarioAtivo.php" method="post">

            <?php
            $sql = "SELECT * FROM tbusuario WHERE id_usuario = $id";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_usuario = $array['id_usuario'];
                $nome = $array['nome'];
                $email = $array['email'];
                $telefone = $array['telefone'];
                $senha = $array['senha'];
                $niveldeacesso = $array['niveldeacesso'];
                    
                ?>    
                <div class="form-group">
                    <label>Nome do usuário</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome Completo" value="<?php echo $nome ?>" autocomplete="off" required>
                    <input type="text" name="id" class="form-control" value="<?php echo $id ?>" style="display: none;">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Seu E-mail" value="<?php echo $email ?>" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Telefone Celular</label>
                    <input type="text" id="telcelular" name="telefone" class="form-control" placeholder="(00) 00000-0000" value="<?php echo $telefone ?>" autocomplete="off" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" required>
                </div>
                <div class="form-group">
                    <label>Senha do Usuário</label>
                    <input id="txtSenha" type="password" name="senha" class="form-control" placeholder="Senha" value="<?php echo $senha ?>" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Repetir Senha</label>
                    <input type="password" name="repetirsenha" class="form-control" placeholder="Repetir Senha" value="<?php echo $senha ?>" autocomplete="off" required oninput="validaSenha(this)">
                </div>
                <div class="form-group">
                    <label>Nível de Acesso Atual:</label><b><span style="color: #28a745;"> <?php  if ($niveldeacesso = $array['niveldeacesso'] == 1) {
                    $niveldeacesso = "Administrador";
                } elseif ($niveldeacesso = $array['niveldeacesso'] == 2) {
                    $niveldeacesso = "Fornecedor";
                } elseif ($niveldeacesso = $array['niveldeacesso'] == 3) {
                    $niveldeacesso = "Conferente";
                }; echo $niveldeacesso ?> </span></b>
                    <select name="niveldeacesso" class="form-control">
                        <option value="1">Administrador(a)</option>
                        <option value="2">Funcionário(a)</option>
                        <option value="3">Conferente</option>
                    </select>
                </div>
                <div style="text-align: right; margin-top: 30px;">
                    <button type="submit" class="btn btn-sm btn-success">Atualizar</button>
                </div>
                <?php } ?>
            </form>

        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script>
        function validaSenha(input) {
            if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity('Repita a senha corretamente');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>
    <script>
        function mask(o, f) {
            setTimeout(function() {
                var v = mphone(o.value);
                if (v != o.value) {
                    o.value = v;
                }
            }, 1);
        }

        function mphone(v) {
            var r = v.replace(/\D/g, "");
            r = r.replace(/^0/, "");
            if (r.length > 10) {
                r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
            } else if (r.length > 5) {
                r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
            } else if (r.length > 2) {
                r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
            } else {
                r = r.replace(/^(\d*)/, "($1");
            }
            return r;
        }
    </script>

</body>

</html>