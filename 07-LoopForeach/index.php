<?php

    $ingredientes = [
        'açúcar',
        'farinha de trigo',
        'ovo',
        'fermento em pó'
    ];
    

    echo "<strong>Exibindo os elementos do array</strong><br><br>";

    foreach($ingredientes as $ingred){ //pegando os elementos do array
        echo "Item: ".$ingred."<br>";
    }

    echo "<hr>";

    echo "<strong>Exibindo a chave e os elementos do array</strong><br><br>";

    foreach($ingredientes as $chave =>$valor){//exibindo os elementos do array e suas chaves

        echo "Chave: ".$chave. " => ".$valor."<br>";
    }