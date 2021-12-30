<?php

//Méthode 1
    $mot = "Salut je m'appelle Yakup"."\n";
    $result = "";
    for($i=strlen($mot)-1;$i>0;$i--){
        $result = $mot[$i];
        echo $result;
    }

//Méthode 2
    echo strrev($mot);