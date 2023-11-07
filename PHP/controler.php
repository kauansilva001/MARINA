<?php

$email = FILTER_INPUT(INPUT_POST, 'email');
$senha = FILTER_INPUT(INPUT_POST, 'senha');
$button =FILTER_INPUT(INPUT_POST, 'button');




include('DAO.php');

$varset = new Entity();
$varset->setEmail($email);
$varset->setSenha($senha);

$crud = new DAO();

if ($button == 'ENVIAR') {
    $crud->cadastrar($e);
} else {
    echo 'Método não realizado :(';
}

/* OS COMMITS FEITOS PELA 'SABRINAOLIVEI' FORAM UM ERRO, O COMMIT FOI FEITO POR 'KAUANSIULVA001'*/