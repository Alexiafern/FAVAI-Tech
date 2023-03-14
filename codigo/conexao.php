<?php
    $servidor ="localhost";
    $usuario ="igor";
    $senha="1234";
    $banco="formulario";

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

    if ($mysqli->connect_errno){
        echo "Não deu certo (" $mysqli->connect_errno;
        exit();
    }

?>