<?php 

$var = FILTER_INPUT(INPUT_POST,'');
$var = FILTER_INPUT(INPUT_POST,'');
$button = FILTER_INPUT(INPUT_POST,'button');

include('conection.php');
include('entity.php');
include('DAO.php');

$crud = new DAO();

if ($button == '') {
    $crud->cadastrar($e);
}else{
    echo 'Método não realizado :(';
}