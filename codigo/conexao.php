<?php
    $servidor ="localhost";
    $usuario ="vitoria";
    $senha="1234";
    $banco="favai";

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

    if ($mysqli->connect_errno){
        echo "Não deu certo " . $mysqli->connect_error;
        exit();
    }

?>