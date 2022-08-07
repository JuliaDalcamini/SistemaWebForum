<?php
 require_once "conexao.inc.php";
 require_once "../classes/assunto.inc.php";

    class AssuntoDao{
        private $con;
    
        function __construct() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function getAssunto($id) {
            $sql = $this->con->prepare('SELECT * FROM assunto WHERE id = :id');

            $sql->bindValue(':id',$id);
            $sql->execute();

            $row = $sql->fetch(PDO::FETCH_OBJ);

            $assunto = new Assunto();
            $assunto->setidAssunto($row->id);
            $assunto->setTitulo($row->titulo);

            return $assunto;
        }

        public function getAssuntos() {
            $sql = $this->con->query('SELECT * FROM assunto');
            $lista = array();

            while($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $assunto = new Assunto();
                $assunto->setidAssunto($row->id);
                $assunto->setTitulo($row->titulo);

                $lista[] = $assunto;
            }
            return $lista;
        }
        
    }
?>