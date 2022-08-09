<?php
 require_once "conexao.inc.php";
 require_once "../classes/mensagem.inc.php";

    class MensagemDao{
        private $con;
    
        function __construct() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function incluirMensagem($mensagem, $usuario, $post){
            $sql = $this->con->prepare("insert into mensagem (idPost, titulo, conteudo, idUsuario) values (:idp,:tit,:cont,:idu)");

            $sql->bindValue(":idp",$post->getIdPost());
            $sql->bindValue(":tit",$mensagem->getTitulo());
            $sql->bindValue(":cont",$mensagem->getConteudo());
            $sql->bindValue(":idu",$usuario->getIdUsuario());
            $sql->execute();
        }

        public function getMensagem($id) {
            $sql = $this->con->prepare('SELECT * FROM mensagem WHERE id = :id');

            $sql->bindValue(':id',$id);
            $sql->execute();

            $row = $sql->fetch(PDO::FETCH_OBJ);

            $mensagem = new Mensagem();
            $mensagem->setIdMensagem($row->id);
            $mensagem->setpost($this->getPost($row->idPost));
            $mensagem->setUsuario($this->getUsuario($row->idUsuario));
            $mensagem->setTitulo($row->titulo);
            $mensagem->setConteudo($row->conteudo);

            return $mensagem;
        }

        public function getMensagens() {
            $sql = $this->con->query('SELECT * FROM mensagem');
            $lista = array();

            while($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $mensagem = new Mensagem();
                $mensagem->setIdMensagem($row->id);
                $mensagem->setpost($this->getPost($row->idPost));
                $mensagem->setUsuario($this->getUsuario($row->idUsuario));
                $mensagem->setTitulo($row->titulo);
                $mensagem->setConteudo($row->conteudo);

                $lista[] = $mensagem;
            }
            return $lista;
        }

        /*public function getMensagensPost($id) {
            $lista = $this->getMensagens();
            $novaLista = array();
            foreach ($lista as $msg) {
                if ($msg->getpost()->getIdPost() == $id) {
                    $novaLista[] = $msg;
                }
            }
            return $novaLista;
        }*/

        public function getMensagensPost($id) {
            $sql = $this->con->prepare('SELECT * FROM mensagem WHERE idPost = :id');
            $lista = array();

            $sql->bindValue(':id', $id);
            $sql->execute();

            while($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $mensagem = new Mensagem();
                $mensagem->setIdMensagem($row->id);
                $mensagem->setpost($this->getPost($row->idPost));
                $mensagem->setUsuario($this->getUsuario($row->idUsuario));
                $mensagem->setTitulo($row->titulo);
                $mensagem->setConteudo($row->conteudo);

                $lista[] = $mensagem;
            }
            return $lista;
        }

        public function excluirMensagem($id)
        {
            $sql = $this->con->prepare("delete from mensagem where id=:id");
            $sql->bindValue(':id',$id);
            $sql->execute();
        }

        public function getUsuario($id) {
            $sql = $this->con->prepare("SELECT nome FROM usuario where idUsuario = :id");

            $sql->bindValue(':id', $id);
            $sql->execute();

            $user = $sql->fetch(PDO::FETCH_OBJ);

            return $user->nome;
        }

        public function getPost($id) {
            $sql = $this->con->prepare("SELECT titulo FROM post where id = :id");

            $sql->bindValue(':id', $id);
            $sql->execute();

            $post = $sql->fetch(PDO::FETCH_OBJ);

            return $post->titulo;
        }
    }
?>