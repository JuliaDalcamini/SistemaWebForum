<?php
 require_once "conexao.inc.php";
 require_once "../classes/usuario.php";

    class UsuarioDao{
        private $con;
    
        function __construct() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function incluirUsuario($usuario){
            $sql = $this->con->prepare("insert into usuario (nome,email,login,senha) values (:nom,:em,:logi,:sen)");

            $sql->bindValue(":nom",$usuario->getNome());
            $sql->bindValue(":em",$usuario->getEmail());
            $sql->bindValue(":logi",$usuario->getLogin());
            $sql->bindValue(":sen",$usuario->getSenha());
            $sql->execute();
        }


}
?>