<?php

class Usuario{
    private $idUsuario;
    private $nome;
    private $email;
    private $login;
    private $senha;

    public function setUsuario($nom,$em,$log,$sen){
        $this->nome = $nom;
        $this->email = $em;
        $this->login = $log;
        $this->senha = $sen;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setNome($nom){
        $this->nome = $nom;
    }

    public function setEmail($em){
        $this->email = $em;
    }

    public function setSenha($sen){
        $this->senha = $sen;
    }
}

?>