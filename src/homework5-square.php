<?php 

function circle_square( int|float $radius): float{
    $radiusSquared = pow($radius, 2);
    return $pi * $radiusSquared;
}

echo 'Enter radius' . PHP_EOL;
$radius = floatval(trim(fgets(STDIN)));
$result = circle_square($radius);
echo $result . PHP_EOL;