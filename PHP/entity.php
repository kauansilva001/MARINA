<?php

class entity{

    private $email, $senha;


    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        return $this->senha = $senha;
    }
}