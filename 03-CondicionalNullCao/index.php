<?php

    //$nome = "Anderson";
    $sobreNome = "Garcia";







    $nomeCompleto = $nome ?? 'Visitante ';
   // $nomeCompleto .= isset($sobreNome)? " ".$sobreNome : "";

   $nomeCompleto .= $sobreNome ?? ''; // faz o mesmo que o código acima (Condicional NULL CAO)


    echo $nomeCompleto;



    $age = "null";
    $personAge = $age ?? "humano";
    echo $personAge; 

