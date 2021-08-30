<?php

session_start();

$categorias = [];
$categorias [] = 'infantil';
$categorias [] = 'adolescente';
$categorias [] = 'adulto';
$categorias [] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'] ;
$idade =  $_POST['idade'] ;
$_SESSION['mensagem-de-sucesso'] = '';
if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o ';
    header('location: index.php' );
    return;
}

else if(strlen($nome) < 5)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ter menos que 5 caracteres. ';
    header('location: index.php' );
    return;
}

else if(strlen($nome) > 50)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ter mais que 50 caracteres. ';
    header('location: index.php' );
    return;
}

else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Informe um numero válido para a idade. ';
    header( 'location: index.php' );
    return;
} else
{
    $_SESSION['mensagem-de-erro'] = '';
}

if($idade >= 6 && $idade <= 12) 
{
    for($i = 0;$i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infatil')
        {
            $_SESSION['mensagem-de-sucesso'] = "O Nadador ". $nome . " Compete na categoria " . $categorias[$i];
            header('location: index.php' );
            return;
        }else{}
    }

}else if($idade >= 13 && $idade <= 18) 
{
    for($i = 0;$i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        {
            $_SESSION['mensagem-de-sucesso'] = "O Nadador ". $nome . " Compete na categoria " . $categorias[$i];
            header('location: index.php' );
            return;
        }else{}
    }

}else if($idade >= 19 && $idade <= 60) 
{
    for($i = 0;$i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        {
            $_SESSION['mensagem-de-sucesso'] = "O Nadador ". $nome . " Compete na categoria " . $categorias[$i];
            header('location: index.php' );
            return;
        }else{}
    }

}else 
{
    for($i = 0;$i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'idoso')
        {
            $_SESSION['mensagem-de-sucesso'] = "O Nadador ". $nome . " Compete na categoria " . $categorias[$i];
            header('location: index.php' );
            return;
        }else{}
    }
}



?>
