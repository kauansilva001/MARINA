<?php

class entity
{

    private $email, $userName;


    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getUserName(){
        return $this->userName;
    }

    public function setUserName($userName){
        return $this->userName = $userName;
    }
}