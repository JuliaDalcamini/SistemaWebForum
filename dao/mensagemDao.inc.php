<?php
 require_once "conexao.inc.php";
 require_once "../classes/mensagem.inc.php";

    class MensagemDao{
        private $con;
    
        function __construct() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function getMensagem($id) {
            $sql = $this->con->prepare('SELECT * FROM mensagem WHERE id = :id');

            $sql->bindValue(':id',$id);
            $sql->execute();

            $row = $sql->fetch(PDO::FETCH_OBJ);

            $mensagem = new Mensagem();
            $mensagem->setId($row->id);
            $mensagem->setIdPost($row->idPost);
            $mensagem->setIdUsuario($row->idUsuario);
            $mensagem->setTitulo($row->titulo);
            $mensagem->setConteudo($row->conteudo);

            return $mensagem;
        }

        public function getMensagens() {
            $sql = $this->con->query('SELECT * FROM mensagem');
            $lista = array();

            while($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $mensagem = new Mensagem();
                $mensagem->setId($row->id);
                $mensagem->setIdPost($row->idPost);
                $mensagem->setIdUsuario($row->idUsuario);
                $mensagem->setTitulo($row->titulo);
                $mensagem->setConteudo($row->conteudo);

                $lista[] = $mensagem;
            }
            return $lista;
        }
    }
?>