<?php

$hyper = file('../hyper.hyper');
$lines = count($hyper);


for ($i = 0; $i <= $lines; $i++) {
    if($i === 0){
        $isHyper = strpos($hyper[$i], "hyper....");
        $isCode = strpos($hyper[$i], "code");
        $isReference = strpos($hyper[$i], "file");


        if($isHyper !== false){

            if($isCode !== false){
                continue;
            }

            elseif($isReference !== false){
            }

            else{echo "........error: Invalid file........<br>";}

        }
        else {
           echo "........error: Invalid file........<br>";
        }

    }

    if($i === 1){

        $fileName = basename("../hyper.hyper", ".hyper");
        $value = $hyper[$i];

        $classNameValid = strpos($value, $fileName);
        if($classNameValid === false){
            echo "........error: class name does not contain file name........<br>";
        }

        $isClass = strpos($value, "...");

        if($isClass === false){
            echo "........error: class undefined........";
        }
        else{echo "You have created a class<br>";}

        if(!preg_match("/[a-z]/i", $hyper[$i])){
            echo "........error: class name undefined........";
        }
        else{echo "Your class is: <br> $hyper[$i]<br><br>";}
    }

    if($i >= 2 && $i <= $lines - 2){

        $value = $hyper[$i];
        $isClass = strpos($value, '...');
        $isVar = strpos($value, '..');
        $isNum = strpos($value, '.n');
        $isStr = strpos($value, '.s');
        $isCon = strpos($value, '.[]');

        if($isClass === false && $isVar !== false){
            echo "You have created a variable <br>";

            if(!preg_match("/[a-z]/i", $value)){
                echo "........error: variable name undefined........";
            }
            else{echo "Your variable is: <br>$value <br>";}

            if($isNum === false && $isStr === false && $isCon === false){
                echo "........error: variable data type undefined........";
            }
            function isDataType($strpos){
                if($strpos !== false){
                   echo "data type valid<br>";
                }
            }
            isDataType($isNum);
            isDataType($isStr);
            isDataType($isCon);
        }


    }

    if($i === $lines-1){
        $isHyper = strpos($hyper[$i], "....hyper");

        if($isHyper === false) {
            echo "........error: Invalid file........<br>";
        }

    }
}



foreach($hyper as $input){

    $variable = strpos($input, '.');

    if($variable === false){

    }
    else{
//        echo "variable<br>";
    }
}



