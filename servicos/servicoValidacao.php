<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setaMensagemErro ('O nome nao pode ser vazio, preencha novamente');
        return false;

    }
    else if  (strlen($nome) < 3)
    {
        setaMensagemErro ('O nome deve conter ao menos 03 cracteres');
        return false;
    }
    else if  (strlen($nome) > 10)
    {
        setaMensagemErro ('O nome deve conter no maximo 10 cracteres');
        return false;
    }
    return true;

}

function validaIdade(string $idade) : bool
{
    if  (!is_numeric($idade))
    {
        setaMensagemErro ('A idade deve ser numerico');
        return false;        ;
    }
    return true;

}


