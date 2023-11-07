<?php

include "entity.php";
include "conection.php";

$e = new Entity;


class DAO {

    function cadastrar(Entity $e){
        $sql = ('insert into Ouvinte (email, senha) values(?,?)');
        $bd = new Conection();
        $con = $bd->getConnection();

        $v = $con->prepare($sql);
        $v->bindValue(1, $e->getEmail());
        $v->bindValue(2, $e->getSenha());

        $result = $v->execute();

        if ($result) {
            echo 'Cadastro realizado <b>com sucesso</b> :)';
        } else {
            echo 'Cadastro <b>não realizado</b> :(';
        }
    }
}