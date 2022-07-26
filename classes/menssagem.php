<?php
    class Menssagem {

        public $id;
        public $idAssunto;
        public $titulo;
        public $conteudo;

        function Menssagem($id, $idAssunto, $titulo, $conteudo) {
            $this->id = $id;
            $this->idAssunto = $idAssunto;
            $this->titulo = $titulo;
            $this->conteudo = $conteudo;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of idAssunto
         */ 
        public function getIdAssunto()
        {
                return $this->idAssunto;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Get the value of conteudo
         */ 
        public function getConteudo()
        {
                return $this->conteudo;
        }
    }
?>