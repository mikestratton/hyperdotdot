<?php

//    $main = file('../hyper..hyper');
$file = file('../hyper..hyper');
foreach($file as $input){

    $variable = strpos($input, '.');

    if($variable === false){

    }
    else{
        echo "variable<br>";
    }
}


//while(! feof($main))
//{
//    echo fgets($main). "<br />";
//}
//fclose($main);


