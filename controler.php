<?php

$email = FILTER_INPUT(INPUT_POST, 'email');
$senha = FILTER_INPUT(INPUT_POST, 'senha');
$button = FILTER_INPUT(INPUT_POST, 'button');


var_dump($email);
var_dump($senha);
var_dump($button);

include('entity.php');
include('DAO.php');

$entity = new Entity();
$entity->setEmail($email);
$entity->setSenha($senha);

$crud = new DAO();

if ($button == 'ENVIAR') {
    $crud->cadastrar($e);
} else {
    echo 'Método não realizado :(';
}

/* OS COMMITS FEITOS PELA 'SABRINAOLIVEI' FORAM UM ERRO, O COMMIT FOI FEITO POR 'KAUANSIULVA001'*/