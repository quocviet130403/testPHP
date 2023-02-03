<?php

$array = [
    "Input.txt" => "Randy", 
    "Code.py" => "Stan", 
    "Output.txt" => "Randy"
];

$newArray = [];
foreach($array as $key => $value) {
    if(isset($newArray[$value])){
        array_push($newArray[$value], $key);
    }else{
        $newArray[$value] = [$key];
    };
}

print_r($newArray);