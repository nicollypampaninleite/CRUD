<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "meuprojeto";
    $con = new mysqli ($host, $usuario,$senha,$banco,3306);

    if ($con->connect_error)
        {
            die ("Erro de Conexão: ".$con->connect_error);
        }
?>