<?php
require_once 'includes/cabecalho.inc';
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
</head>

<body class="body" style="background-image: url('imagens/fundo1.jpg');">
    <div class="body2">
        <h2>Cadastrar Novo Usuário</h2>

        <form action="../controller/controllerCadastro.php" method="post">
            <div class="col-md-6 offset-md-3">
                <p>Nome:* <input type="text" size="50" name="pNome" class="form-control"></p>

                <p>Login:* <input type="text" size="13" name="pLogin" class="form-control"></p>

                <p>Email:* <input type="email" size="25" name="pEmail" class="form-control"></p>

                <p>Senha:* <input type="password" size="10" name="pSenha" class="form-control"></p>

                <p>Confirme sua senha:* <input type="password" size="10" name="pCSenha" class="form-control"></p>

                <p>Escolha o seu avatar: <input type="file" id="avatar" name="pAvatar" accept="image/png, image/jpeg"></p>

                <input type="hidden" name="opcao" value="1">

                <p><button type="submit" class="btn btn-primary">Cadastrar!</button>
                    <a href='LoginUsuario.php'><input type="button" class="btn btn-primary" value="Fazer Login!"></a>
                    <?php
                    if (isset($_REQUEST['erro'])) // verifica se o erro foi setado
                    {
                        if ((int)($_REQUEST['erro']) == 1) { // captura e ver o tipo do erro, no caso, 1
                            echo "<b><font face='Verdana' size='2' color='red'>Senhas não correspondem!</font><b>";
                        } else if ((int)($_REQUEST['erro']) == 2) {
                            echo "<b><font face='Verdana' size='2' color='blue'>Por favor, preencha todos os campos obrigatórios (*)!</font><b>";
                        }
                    }
                    ?>
            </div>
        </form>
    </div>
</body>

</html>
<?php
require_once 'includes/rodape.inc';
?>