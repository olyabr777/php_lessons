<?php 

function circle_square($radius){
    $pi = 3.14159;
    $result = $pi * $radius * $radius;
    return $result;
}

echo 'Enter radius' . PHP_EOL;
$radius = floatval(trim(fgets(STDIN)));
$result = circle_square($radius);
echo $result . PHP_EOL;