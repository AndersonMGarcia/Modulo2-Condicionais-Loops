<?php

    $tipo = strtolower("VIDEO");

    switch ($tipo){

        case 'foto':
            echo "Exibindo foto";
            break;
        case "video":
            echo "Exibindo video";
            break;
        case 'texto':
            echo "Exibindo texto";
            break;

    }