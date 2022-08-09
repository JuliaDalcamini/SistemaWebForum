<?php
require_once '../classes/assunto.inc.php';
require_once '../classes/post.inc.php';
require_once '../classes/usuario.inc.php';
require_once '../classes/mensagem.inc.php';
require_once '../dao/assuntoDao.inc.php';
require_once '../dao/postDao.inc.php';
require_once '../dao/usuarioDao.inc.php';
require_once '../dao/mensagemDao.inc.php';

    $opcao = (int)$_REQUEST['opcao'];

    function carregaListaAssunto() {
        $assuntos = new AssuntoDao();
        $lista_assunto = $assuntos->getAssuntos();

        session_start();
        $_SESSION['assuntos'] = $lista_assunto;
    }

    function carregaListaPosts() {
        $posts = new PostDao();
        $lista = $posts->getPosts();
        $lista_post = array_slice($lista, 0, 5);

        //session_start();
        $_SESSION['posts'] = $lista_post;
    }

    function novaMensagem($idUsuario, $idPost, $titulo, $conteudo) {
        $usuarioDao = new UsuarioDao();
        $postDao = new PostDao();
        
        $usuario = $usuarioDao->getUsuario($idUsuario);
        $post = $postDao->getPost($idPost);

        $mensagem = new Mensagem();
        $mensagem->setMensagem($post, $usuario, $titulo, $conteudo);

        $dao = new MensagemDao();
        $dao->incluirMensagem($mensagem, $usuario, $post);
    }

    function buscarMensagens($idPost) {
        $mensagemDao = new MensagemDao();
        $lista_mensagem = $mensagemDao->getMensagensPost($idPost);
        
        session_start();
        $_SESSION['mensagens'] = $lista_mensagem;
    }

    carregaListaAssunto();
    carregaListaPosts();

    if($opcao == 1) {
        $idAssunto = (int)$_REQUEST['idAssunto'];

        $assuntoDao = new AssuntoDao();
        $postDao = new PostDao();

        $assunto = $assuntoDao->getAssunto($idAssunto);
        $listaPosts = $postDao->getPostAssunto($idAssunto);

        session_start();
        $_SESSION['assunto'] = $assunto;
        $_SESSION['post-assunto'] = $listaPosts;
        
        header("Location:../views/PaginaAssunto.php");
    }

    if($opcao == 2) {
        $idPost = (int)$_REQUEST['idPost'];

        $postDao = new PostDao();
        $post = $postDao->getPost($idPost);

        session_start();
        $_SESSION['post'] = $post;
        buscarMensagens($idPost);
        
        header("Location:../views/PaginaPost.php");
    }

    if($opcao == 3) {
        $idUsuario = (int)$_REQUEST['idUsuario'];
        $idPost = (int)$_REQUEST['idPost'];
        $titulo = $_REQUEST['titulo'];
        $conteudo = $_REQUEST['conteudo'];

        novaMensagem($idUsuario, $idPost, $titulo, $conteudo);

        buscarMensagens($idPost);

        header("Location:../views/PaginaPost.php");
    }

    /*if($opcao == 4) {
        $idUsuario = (int)$_REQUEST['idUsuario'];
        $idPost = (int)$_REQUEST['idPost'];
        $titulo = $_REQUEST['titulo'];
        $conteudo = $_REQUEST['conteudo'];

        $mensagemDao = new MensagemDao();
        $lista_mensagem = $mensagemDao->getMensagensPost($idPost);

        session_start();
        $_SESSION['mensagens'] = $lista_mensagem;

        header("Location:../views/PaginaPost.php");
    }*/
