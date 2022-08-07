<?php
require_once 'includes/cabecalho.inc.php';
require_once '../classes/assunto.inc.php';
require_once '../classes/post.inc.php';
require_once '../controller/controllerPosts.php';

//session_start();
$lista_assunto = $_SESSION['assuntos'];
$lista_post = $_SESSION['posts'];
$postp = $_SESSION['post'];

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
    <aside id="main">
        <div id="left">
            <div id="top">
                <dl class="left">
                    <dt>Últimos Assuntos</dt>
                    <?php
                    foreach ($lista_assunto as $assunto) {
                        echo "<dt>";
                        echo "<dd><a href='../controller/controllerPosts.php?opcao=1&id=" . $assunto->getIdAssunto() . "'>" . $assunto->getTitulo() . "</a></dd>";
                    }
                    ?>
                </dl>
                <dl class="right">
                    <dt>Últimos posts</dt>
                    <?php
                    foreach ($lista_post as $post) {
                        echo "<dt>";
                        echo "<dd><a href='../controller/controllerPosts.php?opcao=2&id=" . $post->getId() . "'>" . $post->getTitulo() . "</a></dd>";
                    }
                    ?>
                </dl>
            </div>
        </div>
    </aside>
    <section id="estrutura-post">
        <h2><?php echo "". $postp->getTitulo() .""?></h2>
        <p id="usuario-post"><?php echo "". $postp->getUsuario() .""?></p>
        <p id="conteudo-post">
            <?php echo "". $postp->getConteudo() .""?>
        </p>
    </section>
</body>

</html>
<?php
require_once 'includes/rodape.inc';
?>