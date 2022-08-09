<h2>Cadastrar novo usuário</h2>

<form action="../controller/controllerCadastro.php" method="post">
    <p>Nome:* <input type="text" size="50" name="pNome"></p>

    <p>Login:* <input type="text" size="13" name="pLogin"></p>

    <p>Email:* <input type="email" size="25" name="pEmail"></p>

    <p>Senha:* <input type="password" size="10" name="pSenha"></p>

    <p>Confirme sua senha:* <input type="password" size="10" name="pCSenha"></p>

    <p>Escolha o seu avatar: <input type="file"
       id="avatar" name="pAvatar"
       accept="image/png, image/jpeg"></p>

    <input type="hidden" name="opcao" value="1">

    <input type="submit" value="Cadastrar!">
    <a href='LoginUsuario.php'><input type="button" value="Fazer Login!"></a>
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
    
</form>