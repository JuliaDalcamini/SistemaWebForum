<?php
    class Post {

        public $id;
        public Assunto $idAssunto;
        public Usuario $idUsuario;
        public $titulo;
        public $conteudo;

        function Menssagem($id, $idAssunto, $idUsuario, $titulo, $conteudo) {
            $this->id = $id;
            $this->idAssunto = $idAssunto;
            $this->idUsuario = $idUsuario;
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
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of idAssunto
         */ 
        public function getIdAssunto()
        {
                return $this->idAssunto;
        }

        /**
         * Set the value of idAssunto
         *
         * @return  self
         */ 
        public function setIdAssunto($idAssunto)
        {
                $this->idAssunto = $idAssunto;

                return $this;
        }

        /**
         * Get the value of idUsuario
         */ 
        public function getIdUsuario()
        {
                return $this->idUsuario;
        }

        /**
         * Set the value of idUsuario
         *
         * @return  self
         */ 
        public function setIdUsuario($idUsuario)
        {
                $this->idUsuario = $idUsuario;

                return $this;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of conteudo
         */ 
        public function getConteudo()
        {
                return $this->conteudo;
        }

        /**
         * Set the value of conteudo
         *
         * @return  self
         */ 
        public function setConteudo($conteudo)
        {
                $this->conteudo = $conteudo;

                return $this;
        }
    }
?>