<?php

// CONEXÃO COM O BANCO DE DADOS

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bd_cadastro_pet';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao)
    {
    die("<h3>Falha ao conectar. Erro: " . mysqli_connect_error());
    }

?>









