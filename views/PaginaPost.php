<?php
require_once 'includes/cabecalho.inc';
require_once '../classes/assunto.inc.php';
require_once '../classes/post.inc.php';
require_once '../controller/controllerPosts.php';

//session_start();
$lista_assunto = $_SESSION['assuntos'];
$lista_post = $_SESSION['posts'];
$postp = $_SESSION['post'];
$usuario = $_SESSION['usuario'];
$mensagens = $_SESSION['mensagens'];
$estado = $_SESSION['logado'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "" . $postp->getTitulo() . "" ?></title>
</head>

<body>
    <?php
    if ($estado == true) {
        echo "<a href='../controller/controllerLoginUsuario.php?pTipo=2' class='btn btn-primary'>Sair</a>";
    }
    ?>
    <aside id="main">
        <div id="left">
            <div id="top">
                <dl class="left">
                    <dt>Últimos Assuntos</dt>
                    <?php
                    foreach ($lista_assunto as $assunto) {
                        echo "<dt>";
                        echo "<dd><a href='../controller/controllerPosts.php?opcao=1&idAssunto=" . $assunto->getIdAssunto() . "'>" . $assunto->getTitulo() . "</a></dd>";
                    }
                    ?>
                </dl>
                <dl class="right">
                    <dt>Últimos posts</dt>
                    <?php
                    foreach ($lista_post as $post) {
                        echo "<dt>";
                        echo "<dd><a href='../controller/controllerPosts.php?opcao=2&idPost=" . $post->getIdPost() . "'>" . $post->getTitulo() . "</a></dd>";
                    }
                    ?>
                </dl>
            </div>
        </div>
    </aside>
    <section id="estrutura-post">
        <h2><?php echo "" . $postp->getTitulo() . "" ?></h2>
        <p id="usuario-post"><?php echo " Autor: " . $postp->getUsuario() . "" ?></p>
        <p id="conteudo-post">
            <?php echo "" . $postp->getConteudo() . "" ?>
        </p>
    </section>
    <section id="estrutura-respostas">
        <?php
        if (!isset($mensagens) || sizeof($mensagens) == 0) {
            echo "<p>Nenhuma resposta ainda.</p>";
        } else {
            foreach ($mensagens as $msg) {
                echo "<br><div><h3>" . $msg->getTitulo() . "</h3>
                    <p id='usuario-msg'> Autor: " . $msg->getUsuario() . "</p>
                    <p id='conteudo-msg'>" . $msg->getConteudo() . "</p></div><br>";
            }
        }
        ?>
    </section>
    <section id="estrutura-msg">
        <?php
        if ($estado == false || $usuario == null) {
            echo "<p>Você deve estar logado para poder responder nesse tópico.</p>";
            echo "<a href='LoginUsuario.php'><p>Fazer Login</p></a>";
        } else {
        ?>
            <p>Sua resposta:</p>
            <p><img id="icon-avatar" src="imagens/avatar/<?php echo $usuario->getAvatar(); ?>.jpg"><?php echo "" . $usuario->getLogin() . "" ?></p>
            <form action="../controller/controllerPosts.php" method="post">
                <br>Título: <input type="text" size="20" name="titulo"><br>
                <input type="hidden" name="idUsuario" value=<?php echo "" . $usuario->getIdUsuario() . "" ?>>
                <input type="hidden" name="idPost" value=<?php echo "" . $postp->getIdPost() . "" ?>>
                <br>Mensagem: <textarea id="ctd-msg" name="conteudo" cols=10 rows=10></textarea><br>
                <input type="hidden" name="opcao" value="3">
                <input type=submit value="Enviar">
            </form>
        <?php
        }
        ?>
    </section>
</body>

</html>
<?php
require_once 'includes/rodape.inc';
?>