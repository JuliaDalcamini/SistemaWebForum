<h2>Cadastrar novo usuário</h2>

<form action="../controller/controllerCadastro.php" method="post">
    <p>Login: <input type="text" size="13" name="pLogin"></p>

    <p>Senha: <input type="password" size="10" name="pSenha"></p>

    <p>Email: <input type="email" size="25" name="pEmail"></p>

    <p>Nome: <input type="text" size="50" name="pNome"></p>

    <input type="hidden" name="opcao" value="1">

    <input type="submit" value="Cadastrar!">
    <input type="reset" value="Apagar">
    
</form>