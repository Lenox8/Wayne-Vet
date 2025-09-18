<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'Vet';

    global $conexao;
    $conexao = new mysqli($host, $user, $password, $dbname);


    if($conexao->connect_errno){
        die ("Erro na conexao com o banco de dados");
    }else{
        echo 'conexao estabelecida';
    }
    



?>