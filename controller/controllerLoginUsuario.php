<?php


function efetuarLogin($login,$senha){

    $con = new Conexao();
    $conexao = $con->getConexao();

    $sql = $conexao->prepare("select * from usuarios where login = :usr and senha = :pass");
    
    $login = strtolower($login);
    $senha = strtolower($senha);
    $sql->bindvalue(':usr',$login);
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

?>
