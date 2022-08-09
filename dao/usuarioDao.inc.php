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
            $sql = $this->con->prepare("insert into usuario (nome,email,login,senha,csenha,avatar) values (:nom,:em,:logi,:sen,:csen,:avat)");

            $sql->bindValue(":nom",$usuario->getNome());
            $sql->bindValue(":em",$usuario->getEmail());
            $sql->bindValue(":logi",$usuario->getLogin());
            $sql->bindValue(":sen",$usuario->getSenha());
            $sql->bindValue(":csen",$usuario->getCSenha());
            $sql->bindValue(":avat",$usuario->getAvatar());
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
            $usuario->setCSenha($row->csenha);
            $usuario->setAvatar($row->avatar);

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
                $usuario->setCSenha($row->csenha);
                $usuario->setAvatar($row->avatar);

                $lista[] = $usuario;
            }
            return $lista;
        }

        public function getUsuarioEmail($email) {
            $sql = $this->con->prepare('SELECT * FROM usuario WHERE email = :email');

            $sql->bindValue(':email',$email);
            $sql->execute();

            $row = $sql->fetch(PDO::FETCH_OBJ);

            $usuario = new Usuario();
            $usuario->setIdUsuario($row->idUsuario);
            $usuario->setLogin($row->login);
            $usuario->setNome($row->nome);
            $usuario->setEmail($row->email);
            $usuario->setSenha($row->senha);
            $usuario->setCSenha($row->csenha);
            $usuario->setAvatar($row->avatar);

            return $usuario;
        }
}
?>