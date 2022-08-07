<?php
    class Mensagem {

        public $id;
        public Post $idPost;
        public Usuario $idUsuario;
        public $titulo;
        public $conteudo;

        function Menssagem($id, $idPost, $idUsuario, $titulo, $conteudo) {
            $this->id = $id;
            $this->idPost = $idPost;
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
         * Get the value of idPost
         */ 
        public function getIdPost()
        {
                return $this->idPost;
        }

        /**
         * Set the value of idPost
         *
         * @return  self
         */ 
        public function setIdPost($idPost)
        {
                $this->idPost = $idPost;

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