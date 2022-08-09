<?php
require_once '../dao/usuarioDao.inc.php';
require_once '../classes/usuario.inc.php';

$opcao = $_REQUEST['opcao'];

    function fileUpload($avatar, $login) {
        $target_dir = "../views/imagens/";
        $target_file = $target_dir . basename($_FILES[$avatar]["{$login}-icon"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES[$avatar]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES[$avatar][$login + "-icon"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES[$avatar][$login + "-icon"])). " has been uploaded.";
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
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
        fileUpload($avatar, $login);
    } else {
        fileUpload($avatar, $login);
    }

    $usuario = new Usuario();
    $usuario->setUsuario($nome,$email,$login,$senha,$csenha,$avatar);

    $dao = new UsuarioDao();
    $dao->incluirUsuario($usuario);

    header("Location: ../views/LoginUsuario.php");
}
