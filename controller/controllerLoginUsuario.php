<?php
require_once '../dao/conexao.inc.php';
require_once '../classes/usuario.inc.php';
require_once '../dao/usuarioDao.inc.php';

function efetuarLogin($email,$senha){

    $con = new Conexao();
    $conexao = $con->getConexao();

    $sql = $conexao->prepare("select * from usuario where email = :email and senha = :pass");
    
    $email = strtolower($email);
    $sql->bindvalue(':email',$email);
    $sql->bindvalue(':pass',$senha);
    $sql->execute();

    $count = $sql->rowCount(); //Verificando quantos registros retornam; caso seja 1, localizou

    if($count == 1){
        return true;
    }
    else{
        return false;
    }    
}

$tipo = $_REQUEST['pTipo'];
$email = $_REQUEST['pEmail'];
$senha = $_REQUEST['pSenha'];

session_start();
$_SESSION['usuario'] = null;
$_SESSION['logado'] = false;

//if ($tipo == '1') {
    $logado = efetuarLogin($email, $senha);
    if($logado) // se achou o usuário, a função retorna true
    {
        $dao = new UsuarioDao();
        $usuario = $dao->getUsuarioEmail($email);

        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['logado'] = true;
        header("Location: ../views/index.php");
    }
    else
    {
        header("Location: ../views/LoginUsuario.php?erro=1");
    }
//}

if ($tipo == '2') {
    session_start();
    $_SESSION['usuario'] = null;
    $_SESSION['logado'] = false;
}
