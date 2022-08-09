<?php
 require_once "conexao.inc.php";
 require_once "../classes/usuario.inc.php";

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

        public function getUsuario($id) {
            $sql = $this->con->prepare('SELECT * FROM usuario WHERE idUsuario = :id');

            $sql->bindValue(':id',$id);
            $sql->execute();

            $row = $sql->fetch(PDO::FETCH_OBJ);

            $usuario = new Usuario();
            $usuario->setIdUsuario($row->idUsuario);
            $usuario->setLogin($row->login);
            $usuario->setNome($row->nome);
            $usuario->setEmail($row->email);
            $usuario->setSenha($row->senha);

            return $usuario;
        }

        public function getUsuarios() {
            $sql = $this->con->prepare('SELECT * FROM usuario');
            $lista = array();

            while($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $usuario = new Usuario();
                $usuario->setIdUsuario($row->idUsuario);
                $usuario->setLogin($row->login);
                $usuario->setNome($row->nome);
                $usuario->setEmail($row->email);
                $usuario->setSenha($row->senha);

                $lista[] = $usuario;
            }
            return $lista;
        }

        public function getUsuarioLogin($login) {
            $sql = $this->con->prepare('SELECT * FROM usuario WHERE login = :login');

            $sql->bindValue(':login',$login);
            $sql->execute();

            $row = $sql->fetch(PDO::FETCH_OBJ);

            $usuario = new Usuario();
            $usuario->setIdUsuario($row->idUsuario);
            $usuario->setLogin($row->login);
            $usuario->setNome($row->nome);
            $usuario->setEmail($row->email);
            $usuario->setSenha($row->senha);

            return $usuario;
        }
}
?>