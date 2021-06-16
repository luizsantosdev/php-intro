<?php

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";


$nome = $_POST['nome'];
$idade = $_POST ['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');

//var_dump($nome);
//var_dump($idade);

//print_r($categorias);
