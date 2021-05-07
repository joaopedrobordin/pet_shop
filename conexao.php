<?php

// CONEXÃO COM O BANCO DE DADOS

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bd_reservas';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao)
    {
    die("<h3>Não conectado. Erro: " . mysqli_connect_error());
    }

?>









?>