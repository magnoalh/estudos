<?php

$categorias = [];
$categorias [] = 'infantil';
$categorias [] = 'adolescente';
$categorias [] = 'adulto';
$categorias [] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'] ;
$idade =  $_POST['idade'] ;

if(empty($nome))
{
    echo "O nome não pode ser vazio ";
    return;
}

if(strlen($nome) < 5)
{
echo "O nome deve conter mais que 5 caracteres .";
return;
}

if(strlen($nome) > 50)
{
echo "O nome deve conter menos extenso .";
return;
}

if(is_numeric($idade))
{
    echo "Informe um numero válido .";
    return;
}

if($idade >= 6 && $idade <= 12) 
{
    for($i = 0;$i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infatil')
        {
            echo "O Nadador ". $nome . " Compete na categoria " . $categorias[$i];
        }else{}
    }

}else if($idade >= 13 && $idade <= 18) 
{
    for($i = 0;$i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        {
            echo "O Nadador ". $nome . " Compete na categoria " . $categorias[$i];
        }else{}
    }

}else if($idade >= 19 && $idade <= 60) 
{
    for($i = 0;$i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        {
            echo "O Nadador ". $nome . " Compete na categoria " . $categorias[$i];
        }else{}
    }

}else 
{
    for($i = 0;$i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'idoso')
        {
            echo "O Nadador ". $nome . " Compete na categoria " . $categorias[$i];
        }else{}
    }
}



?>
