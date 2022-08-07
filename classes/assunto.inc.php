<?php
    class Assunto {
        public $idAssunto;
        public $titulo;

        function Assunto ($idAssunto, $titulo) {
            $this->idAssunto = $idAssunto;
            $this->titulo = $titulo;
        }

        /**
         * Get the value of idAssunto
         */ 
        public function getidAssunto()
        {
                return $this->idAssunto;
        }

        /**
         * Set the value of idAssunto
         *
         * @return  self
         */ 
        public function setidAssunto($idAssunto)
        {
                $this->idAssunto = $idAssunto;

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
    }
?>