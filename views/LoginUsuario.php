<?php
require_once 'includes/cabecalho.inc';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body class="body" style="background-image: url('imagens/fundo1.jpg');">
    <div class="body2">
        <h1>Login</h1>
        <p>
        <form action="../controller/controllerLoginUsuario.php" method="get">
            <div class="col-md-6 offset-md-3">
                E-mail: <input type="text" size="20" name="pEmail" class="form-control">
                <p>Senha: <input type="password" size="10" name="pSenha" class="form-control"></p>
                <p><button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        <p>
            <a href="CadastroUsuario.php">
                <p>Ainda não tem um cadastro?</p>
            </a>
            <?php
            if (isset($_REQUEST['erro'])) // verifica se o erro foi setado
            {
                if ((int)($_REQUEST['erro']) == 1) // captura e ver o tipo do erro, no caso, 1
                    echo "<b><font face='Verdana' size='2' color='red'>Login Incorreto!</font><b>";
                else if ((int)($_REQUEST['erro']) == 2)
                    echo "<b><font face='Verdana' size='2' color='blue'>Por favor, efetue seu login!</font><b>";
            }
            ?>
    </div>
</body>

</html>

<?php
require_once 'includes/rodape.inc';
?>