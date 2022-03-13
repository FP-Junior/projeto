<?php
    $bdHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db_accounts';

    $conexao = new mysqli($bdHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno){
        echo "Erro";
    }else{
        echo "Conectado";
    }
?>