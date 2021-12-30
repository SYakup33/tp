<?php

//Méthode 1
    $mot = "Salut je m'appelle Yakup";
    $result = "";
    for($i=strlen($mot)-1;$i>=0;$i--){
        $result = $mot[$i];
        echo $result;
    }
    echo "\n";

//Méthode 2
    echo strrev($mot);