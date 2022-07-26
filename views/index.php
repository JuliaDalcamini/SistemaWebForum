<?php
require_once 'includes/cabecalho.inc';
require_once '../classes/assunto.inc.php';
require_once '../classes/post.inc.php';
require_once '../controller/controllerPosts.php';

//session_start();
$lista_assunto = $_SESSION['assuntos'];
$lista_post = $_SESSION['posts'];
$estado = $_SESSION['logado'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
     <title>Home</title>
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
                              echo "<img scr='imagens/disney-icon.png'>";
                              echo "<dt>";
                              echo "<dd><a href='../controller/controllerPosts.php?opcao=1&idAssunto=" . $assunto->getIdAssunto() . "'>" . $assunto->getTitulo() . "</a></dd>";
                         }
                         ?>
                    </dl>
                    <dl class="right">
                         <dt>Últimos posts</dt>
                         <?php
                         foreach ($lista_post as $post) {
                              echo "<img src='imagens/Pixar-Theory-icon.png'>";
                              echo "<dt>";
                              echo "<dd><a href='../controller/controllerPosts.php?opcao=2&idPost=" . $post->getIdPost() . "'>" . $post->getTitulo() . "</a></dd>";
                         }
                         ?>
                    </dl>
                    <div id="topbottom"> </div>
               </div>
          </div>
     </aside>
</body>

</html>
<?php
require_once 'includes/rodape.inc';
?>