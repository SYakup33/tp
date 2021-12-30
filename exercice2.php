<?php
    $palin = "BOB";
    for($i=0;$i>strlen($palin);$i++){
     if($palin[$i] == $palin(strlen($palin)-$i)){
            echo "Palindrome";
        }
    }

