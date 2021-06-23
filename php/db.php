<?php

    $hostname = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'dashboard';

    // CONNECT TO DB
    $link = mysqli_connect($hostname,$usuario,$senha,$banco);
    mysqli_set_charset($link,'utf8');

?>
