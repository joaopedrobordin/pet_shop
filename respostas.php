<?php 
if(isset($_POST['nome']) && $_POST['nome'] != ''){
    $client = [];

    $client['nome'] = $_POST['nome'];

    if(isset($_POST['nome'])){
        $client['nome'] = $_POST['nome'];
    }else{
        $client['nome'] = '';
    }

    if(isset($_POST['raca'])){
        $client['raca'] = $_POST['raca'];
    }else{
        $client['raca'] = '';
    }

    if(isset($_POST['sexo'])){
        $client['sexo'] = $_POST['sexo'];
    }else{
        $client['sexo'] = '';
    }

    if(isset($_POST['obs'])){
        $client['obs'] = $_POST['obs'];
    }else{
        $client['obs'] = '';
    }
}

include "conexao.php";

if(isset($client)){
    $sqlInserir = "INSERT INTO tb_consulta(nome, raca, sexo, obs) VALUES
    (
        '{$client['nome']}',
        '{$client['raca']}',
        '{$client['sexo']}',
        '{$client['obs']}'
    );";

    mysqli_query($conexao, $sqlInserir);
}

include "index.php";
?>