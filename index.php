<?php

$categorias =[];
$categorias []= 'infantil';
$categorias []= 'adolescente';
$categorias []= 'adulto';
$categorias []= 'idoso';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 33 ;

//var_dump($nome);
//print_r($categorias);

 if ($idade>=6 && $idade<=12)
{
    for ($i = 0; $i < count($categorias); $i++)
    {

        if($categorias[$i] == 'infantil')
            echo "O nadador" . $nome . "compete na categoria infantil";

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

