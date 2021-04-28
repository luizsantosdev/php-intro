<?php

session_start();

$categorias =[];
$categorias []= 'infantil';
$categorias []= 'adolescente';
$categorias []= 'adulto';
$categorias []= 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
     $_SESSION['mensagem-de-erro']= 'O nome nao pode ser vazio, preencha novamente';
     header('location: index.php');
     return;

}
else if  (strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro']= 'O nome deve conter ao menos 03 cracteres';
    header('location: index.php');
    return;
}
else if  (strlen($nome) > 10)
{
    $_SESSION['mensagem-de-erro']= 'O nome deve conter no maximo 10 cracteres';
    header('location: index.php');
    return;
}
if  (!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro']= 'a idade deve ser numerico';
    header('location: index.php');
    ;
}

//var_dump($nome);
//var_dump($idade);

//print_r($categorias);
//return 0;
if ($idade>=6 && $idade<=12)
{
    for ($i = 0; $i < count($categorias); $i++)
    {

        if($categorias[$i] == 'infantil') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " . $nome . " compete na categoria infantil";
            header('location: index.php');

        }
    }

}
elseif ($idade>=13 && $idade<=18)
{
    echo 'adolescente';
}

else
{
    echo 'adulto';
}