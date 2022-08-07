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
    <title><?php echo "" . $assunto->getTitulo() . ""; ?></title>
</head>

<body>
    <h1><?php echo "" . $assunto->getTitulo() . ""; ?></h1>
    <p>
    <div id="main">
        <div id="left">
            <div id="top">
                <dl class="left">
                    <dt>latest news</dt>
                    <dd><a href="#">Update 5 - now having a board</a></dd>
                    <dd><a href="#">Update 4 - at least in color</a></dd>
                    <dd><a href="#">Update 3 - coming out of beta</a></dd>
                </dl>
                <dl class="right">
                    <dt>latest posts</dt>
                    <dd><a href="#">Topic 3 - what's OSWD?</a></dd>
                    <dd><a href="#">Topic 2 - what kind of music?</a></dd>
                    <dd><a href="#">Topic 1 - welcome to the board</a></dd>
                </dl>
                <div id="topbottom"> </div>
            </div>
            <div id="content">
                <div id="headline">
                    <h1>your community &rsaquo; site one</h1>
                </div>
</body>

</html>