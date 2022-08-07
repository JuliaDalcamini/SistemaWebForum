<?php
    class Mensagem {

        public $id;
        public $post;
        public $usuario;
        public $titulo;
        public $conteudo;

        function Menssagem($id, $post, $usuario, $titulo, $conteudo) {
            $this->id = $id;
            $this->post = $post;
            $this->usuario = $usuario;
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