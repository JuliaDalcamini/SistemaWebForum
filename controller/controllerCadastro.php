<?php
require_once '../dao/usuarioDao.inc.php';
require_once '../classes/usuario.php';

$opcao = $_REQUEST['opcao'];

if($opcao == 1){
    $login = $_REQUEST['pLogin'];
    $senha = $_REQUEST['pSenha'];
    $email = $_REQUEST['pEmail'];
    $nome = $_REQUEST['pNome'];

    $usuario = new Usuario();
    $usuario->setUsuario($nome,$email,$login,$senha);

    $dao = new UsuarioDao();
    $dao->incluirUsuario($usuario);

    header("Location: ../views/LoginUsuario.php");
}
?>