<?php

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
    echo 'O nome nao pode ser vazio';
    return;
}
if (strlen($nome) < 3)
{
    echo 'O nome deve conter ao menos 03 cracteres';
    return;
}
if (strlen($nome) > 10)
{
    echo 'O nome deve conter no maximo 10 cracteres';
    return;
}
if (!is_numeric($idade))
{
    echo 'deve ser numerico';
    return;
}

//var_dump($nome);
//var_dump($idade);

//print_r($categorias);
//return 0;
if ($idade>=6 && $idade<=12)
{
    for ($i = 0; $i < count($categorias); $i++)
    {

        if($categorias[$i] == 'infantil')
            echo "O nadador " . $nome . " compete na categoria infantil";

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