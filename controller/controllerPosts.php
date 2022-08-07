<?php
require_once '../classes/assunto.inc.php';
require_once '../classes/post.inc.php';
require_once '../dao/assuntoDao.inc.php';
require_once '../dao/postDao.inc.php';

session_start();

    function carregaListaAssunto() {
        $assuntos = new AssuntoDao();
        $lista_assunto = $assuntos->getAssuntos();

        $_SESSION['assuntos'] = $lista_assunto;
    }

    function carregaListaPosts() {
        $posts = new PostDao();
        $lista = $posts->getPosts();
        $lista_post = array_slice($lista, 0, 5);

        $_SESSION['posts'] = $lista_post;
    }

    $opcao = (int)$_REQUEST['opcao'];

    carregaListaAssunto();
    carregaListaPosts();

    if($opcao == 1) {
        $id = (int)$_REQUEST['id'];

        $assuntoDao = new AssuntoDao();
        $assunto = $assuntoDao->getAssunto($id);
        
        header("Location:../views/PaginaPost.php");
    }

?>