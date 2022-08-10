<?php
require_once '../dao/usuarioDao.inc.php';
require_once '../classes/usuario.inc.php';

$opcao = $_REQUEST['opcao'];

function uploadFotos($avatar){
    $foto = $_FILES['pImagem'];
    $nome = $avatar;

    if($foto != NULL){
        $tmpName = $_FILES['pImagem']['tmp_name'];
        copy($tmpName, "../views/imagens/avatar/$nome");
    }else{
        echo "Erro ao fazer upload!!!";
    }
}

if($opcao == 1){
    $login = $_REQUEST['pLogin'];
    $senha = $_REQUEST['pSenha'];
    $csenha = $_REQUEST['pCSenha'];
    $email = $_REQUEST['pEmail'];
    $nome = $_REQUEST['pNome'];
    $avatar = $_REQUEST['pAvatar'];

    $campos = array($login, $senha, $csenha, $email, $nome);

    foreach ($campos as $campo) {
        if (empty($campo)) {
            header("Location: ../views/CadastroUsuario.php?erro=2");
        }
    }

    if($senha != $csenha){
        header("Location: ../views/CadastroUsuario.php?erro=1");
    }

    if(empty($avatar) || $avatar == null) {
        $avatar = "icon-vazio.jpg";
        uploadFotos($avatar);
    } else {
        uploadFotos($avatar);
    }

    $usuario = new Usuario();
    $usuario->setUsuario($nome,$email,$login,$senha,$csenha,$avatar);

    $dao = new UsuarioDao();
    $dao->incluirUsuario($usuario);

    header("Location: ../views/LoginUsuario.php");
}
