<?php

$file = file('../hyper.hyper');


foreach($file as $input){

    $variable = strpos($input, '.');

    if($variable === false){

    }
    else{
        echo "variable<br>";
    }
}



