<?php
    class Mensagem {

        public $idMensagem;
        public $post;
        public $usuario;
        public $titulo;
        public $conteudo;

        function Mensagem() {

        }

        function setMensagem($post, $usuario, $titulo, $conteudo) {
            $this->post = $post;
            $this->usuario = $usuario;
            $this->titulo = $titulo;
            $this->conteudo = $conteudo;
        }

        

        /**
         * Get the value of idMensagem
         */ 
        public function getidMensagem()
        {
                return $this->idMensagem;
        }

        /**
         * Set the value of idMensagem
         *
         * @return  self
         */ 
        public function setidMensagem($idMensagem)
        {
                $this->idMensagem = $idMensagem;

                return $this;
        }

        /**
         * Get the value of post
         */ 
        public function getpost()
        {
                return $this->post;
        }

        /**
         * Set the value of post
         *
         * @return  self
         */ 
        public function setpost($post)
        {
                $this->post = $post;

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