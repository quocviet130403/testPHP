<?php

$array = [ 
	['Ava', 'Emma', 'Olivia'], 
	['Olivia', 'Sophia', 'Emma'] 
];
		
$newArray = [];
for ($i=0; $i < count($array); $i++) {
	$newArray = array_merge($newArray, $array[$i]);
}
$newArray =  array_unique ($newArray);

print_r($newArray);