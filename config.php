<?php
    /*
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'aula02form';
    */
    $conexao = new mysqli('localhost:3306','root','root','aula02form');

    if($conexao->connect_errno)
    {
        echo "Errou em alguma parada";
    }
    else
    {
        echo "Conexão rodando redondinha";
    }

?>
