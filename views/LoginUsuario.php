<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <p>
    <form action="../controller/controllerLoginUsuario.php" method="get">
        Login: <input type="text" size="20" name="pLogin">
        <p>Senha: <input type="password" size="10" name="pSenha">
        <p><input type="submit" value="Login">
    </form>
    <p>
        <a href="CadastroUsuario.php"><p>Ainda não tem um cadastro?</p></a>
        <?php
        if (isset($_REQUEST['erro'])) // verifica se o erro foi setado
        {
            if ((int)($_REQUEST['erro']) == 1) // captura e ver o tipo do erro, no caso, 1
                echo "<b><font face='Verdana' size='2' color='red'>Login Incorreto!</font><b>";
            else if ((int)($_REQUEST['erro']) == 2)
                echo "<b><font face='Verdana' size='2' color='blue'>Por favor, efetue seu login!</font><b>";
        }
        ?>
</body>

</html>