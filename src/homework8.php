<?php

function generateArray(int $lenght = 10, int $min = 1, int $max = 10): array {

    $array = [];
    for ($i = 0; $i < $lenght; $i++) {
        $array[] = rand($min, $max);
    }

    return $array;

}

$myArray = generateArray();

$sum = 0;
$multiplication = 1;
$countfive = 0;
$devarray = [];
foreach($myArray as $number){
    $sum += $number;
    $multiplication *= $number;
    if( $number === 5 ) $countfive++;
    if( ($number % 3) === 0 ) $devarray[] = $number;
}

$unique_values = array_unique($devarray);

echo "Sum: " . $sum . PHP_EOL;
echo "Multiplication: " . $multiplication . PHP_EOL;
echo "Countfive: " . $countfive. PHP_EOL;
echo "Numbers: " . print_r($devarray) . PHP_EOL;
echo "Numbers Unique: " . print_r($unique_values) . PHP_EOL;



