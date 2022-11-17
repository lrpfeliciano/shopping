<?php

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    $sexo = $_POST["sexo"];

//    $estilos = array($_POST["estilo"][]);
    echo "Bem-vindo, ".$nome;

    echo "<br/>Idade: " . $idade; 
    echo "<br/>Sexo: " . $sexo;

    echo "<br/>Estilo: ";
    foreach ($_POST["estilo"] as $item  ){
        echo $item;
    }
?>