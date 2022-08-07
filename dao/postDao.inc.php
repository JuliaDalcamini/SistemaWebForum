<?php
 require_once "conexao.inc.php";
 require_once "../classes/post.inc.php";

    class PostDao{
        private $con;
    
        function __construct() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function getPost($id) {
            $sql = $this->con->prepare('SELECT * FROM post WHERE id = :id');

            $sql->bindValue(':id',$id);
            $sql->execute();

            $row = $sql->fetch(PDO::FETCH_OBJ);

            $post = new Post();
            $post->setId($row->id);
            $post->setAssunto($this->getAssunto($row->idAssunto));
            $post->setUsuario($this->getUsuario($row->idUsuario));
            $post->setTitulo($row->titulo);
            $post->setConteudo($row->conteudo);

            return $post;
        }

        public function getPosts() {
            $sql = $this->con->query('SELECT * FROM post');
            $lista = array();

            while($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $post = new Post();
                $post->setId($row->id);
                $post->setAssunto($this->getAssunto($row->idAssunto));
                $post->setUsuario($this->getUsuario($row->idUsuario));
                $post->setTitulo($row->titulo);
                $post->setConteudo($row->conteudo);

                $lista[] = $post;
            }
            return $lista;
        }

        public function getPostAssunto($id) {
            $sql = $this->con->prepare('SELECT * FROM post WHERE idAssunto = :id');
            $lista = array();

            $sql->bindValue(':id', $id);
            $sql->execute();

            while($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $post = new Post();
                $post->setId($row->id);
                $post->setAssunto($this->getAssunto($row->idAssunto));
                $post->setUsuario($this->getUsuario($row->idUsuario));
                $post->setTitulo($row->titulo);
                $post->setConteudo($row->conteudo);

                $lista[] = $post;
            }
            return $lista;
        }

        public function getUsuario($id) {
            $sql = $this->con->prepare("SELECT nome FROM usuario where idUsuario = :id");

            $sql->bindValue(':id', $id);
            $sql->execute();

            $user = $sql->fetch(PDO::FETCH_OBJ);

            return $user->nome;
        }

        public function getAssunto($id) {
            $sql = $this->con->prepare("SELECT titulo FROM assunto where id = :id");

            $sql->bindValue(':id', $id);
            $sql->execute();

            $assunto = $sql->fetch(PDO::FETCH_OBJ);

            return $assunto->titulo;
        }
    }
?>