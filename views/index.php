<?php
require_once 'includes/cabecalho.inc';
require_once '../classes/assunto.inc.php';
require_once '../classes/post.inc.php';

session_start();
$lista_assunto = $_SESSION['assuntos'];
$lista_post = $_SESSION['posts'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home</title>
</head>

<body>
     <div id="main">
          <div id="left">
               <div id="top">
                    <dl class="left">
                         <dt>Últimos Assuntos</dt>
                         <?php
                         foreach ($lista_assunto as $assunto) {
                              echo "<dt>";
                              echo "<dd><a href='../controller/controllerPost.php?opcao=1&id=" . $assunto->getId() . "'>" . $assunto->getTitulo() . "</a></dd>";
                         }
                         ?>
                    </dl>
                    <dl class="right">
                         <dt>Últimos posts</dt>
                         <?php
                         foreach ($lista_post as $post) {
                              echo "<dt>";
                              echo "<dd>" . $post->getTitulo() . "</dd>";
                         }
                         ?>
                    </dl>
                    <div id="topbottom"> </div>
               </div>
          </div>
     </div>
</body>

</html>
<?php
require_once 'includes/rodape.inc';
?>