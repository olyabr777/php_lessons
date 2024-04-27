<?php

function generateArray(int $lenght = 10, int $min = 1, int $max = 10): array {

    $array = [];
    for ($i = 0; $i < $lenght; $i++) {
        $array[] = rand($min, $max);
    }

    return $array;

}

$myArray = generateArray();

echo "min: " . min($myArray) . PHP_EOL;
echo "max: " . max($myArray) . PHP_EOL;

sort($myArray);
echo "sorted array: ";
print_r( $myArray ); 
echo PHP_EOL;