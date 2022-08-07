<?php
require_once '../classes/assunto.inc.php';
require_once '../classes/post.inc.php';
require_once '../dao/assuntoDao.inc.php';
require_once '../dao/postDao.inc.php';

    $opcao = (int)$_REQUEST['opcao'];

    function carregaListaAssunto() {
        $assuntos = new AssuntoDao();
        $lista_assunto = $assuntos->getAssuntos();

        //session_start();
        $_SESSION['assuntos'] = $lista_assunto;
    }

    function carregaListaPosts() {
        $posts = new PostDao();
        $lista = $posts->getPosts();
        $lista_post = array_slice($lista, 0, 5);

        session_start();
        $_SESSION['posts'] = $lista_post;
    }

    carregaListaAssunto();
    carregaListaPosts();

    if($opcao == 1) {
        $id = (int)$_REQUEST['id'];

        $assuntoDao = new AssuntoDao();
        $postDao = new PostDao();

        $assunto = $assuntoDao->getAssunto($id);
        $listaPosts = $postDao->getPostAssunto($id);

        session_start();
        $_SESSION['assunto'] = $assunto;
        $_SESSION['post-assunto'] = $listaPosts;
        
        header("Location:../views/PaginaAssunto.php");
    }

    if($opcao == 2) {
        $id = (int)$_REQUEST['id'];

        $postDao = new PostDao();
        $post = $postDao->getPost($id);

        session_start();
        $_SESSION['post'] = $post;
        
        header("Location:../views/PaginaPost.php");
    }
