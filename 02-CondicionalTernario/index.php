<?php

    $idade = 36;

    //echo ($idade >= 18) ? "Maior de Idade" : "Menor de Idade";

    $menorIdade = ($idade < 18) ? true : false;

    if ($menorIdade){
        echo "Menor de Idade...";
    }else{
        echo "Maior de Idade...";
    }
?>