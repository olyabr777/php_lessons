<?php 

function power( int|float $number, int $exponent): float {
    $result = pow($number, $exponent);
    return $result;
}

echo 'Enter number' . PHP_EOL;
$number = floatval(trim(fgets(STDIN)));
echo 'Enter exponent' . PHP_EOL;
$exponent = floatval(trim(fgets(STDIN)));
$result = power($number, $exponent);
echo $result . PHP_EOL;