<?php

include "entity.php";
include "conection.php";
class  DAO{
    
    function cadastrar(Conection $conection){
        $sql = ('insert into  (email, user) values(?,?)');
        $bd = new Conection();
        $conection->getConection();
    
        $v = $conection->prepare($sql);
        $v->bindValue(1, $conection->getEmail());
        $v->bindValue(2, $conection->getUserName());
    
        $result = $v->execute();
    
        if($result){
        
    }
}
}