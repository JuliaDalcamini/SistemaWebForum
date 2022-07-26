<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Mensagem</title>
</head>

<body align="center">
    <h2>Escrever Nova Mensagem:</h2>
    <form action="../controller/controllerMensagem.php" method="get">
        <p> Destinatário:
            <select name="pDestinatario">
                <option value="0">-</option>
                <?php
                foreach ($usuarios as $usu) {
                    echo "<option value='$usu->codigo'>$usu->login : $usu->nome</option>";
                }
                ?>
            </select>
        </p>
        Assunto: <input type="text" size="30" name="pAssunto">
        <p>Mensagem: <textarea name=pMensagem cols=30 rows=10></textarea>
        <p><input type="submit" value="Enviar"> <input type="reset" value="Cancelar">
    </form>
    <?php
        if (isset($_REQUEST['erro'])) // verifica se o erro foi setado
        {
            if ((int)($_REQUEST['erro']) == 1) // captura e ver o tipo do erro, no caso, 1
                echo "<b><font face='Verdana' size='2' color='red'>Algo deu errado, tente novamente.</font><b>";
            else if ((int)($_REQUEST['erro']) == 2)
                echo "<b><font face='Verdana' size='2' color='blue'>O campo assunto não pode estar vazio.</font><b>";
        }
        ?>
</body>

</html>