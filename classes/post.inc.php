<?php
    class Post {

        public $idPost;
        public $assunto;
        public $usuario;
        public $titulo;
        public $conteudo;

        function Post() {

        }

        function setPost($assunto, $usuario, $titulo, $conteudo) {
            $this->assunto = $assunto;
            $this->usuario = $usuario;
            $this->titulo = $titulo;
            $this->conteudo = $conteudo;
        }

        /**
         * Get the value of idPost
         */ 
        public function getidPost()
        {
                return $this->idPost;
        }

        /**
         * Set the value of idPost
         *
         * @return  self
         */ 
        public function setidPost($idPost)
        {
                $this->idPost = $idPost;

                return $this;
        }

        /**
         * Get the value of assunto
         */ 
        public function getassunto()
        {
                return $this->assunto;
        }

        /**
         * Set the value of assunto
         *
         * @return  self
         */ 
        public function setassunto($assunto)
        {
                $this->assunto = $assunto;

                return $this;
        }

        /**
         * Get the value of usuario
         */ 
        public function getusuario()
        {
                return $this->usuario;
        }

        /**
         * Set the value of usuario
         *
         * @return  self
         */ 
        public function setusuario($usuario)
        {
                $this->usuario = $usuario;

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