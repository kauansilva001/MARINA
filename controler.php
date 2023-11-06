<?php

$var = FILTER_INPUT(INPUT_POST, '');
$var = FILTER_INPUT(INPUT_POST, '');
$button = FILTER_INPUT(INPUT_POST, 'button');


include('entity.php');
include('DAO.php');

$entity = new Entity();
$entity->setEmail($email);
$entity->setSenha($senha);

$crud = new DAO();

if ($button == '') {
    $crud->cadastrar($e);
} else {
    echo 'Método não realizado :(';
}

/* OS COMMITS FEITOS PELA 'SABRINAOLIVEI' FORAM UM ERRO, O COMMIT FOI FEITO POR 'KAUANSIULVA001'*/