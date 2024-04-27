<?php

function fibonacciSequence(int $max): array {
    $result = [];
    $prev = 0;
    $curr = 1;
    
    while ($curr < $max) {
        $result[] = $curr;
        $temp = $curr;
        $curr += $prev;
        $prev = $temp;
    }
    
    return $result;
}

$max_value = 10; 

echo "Fibonacci numbers less than $max_value: ";
$result = "";
$fibonacciNumbers = fibonacciSequence($max_value);
foreach ($fibonacciNumbers as $fibonacci) {
    $result .= "$fibonacci,";
}

echo rtrim($result,",") . PHP_EOL;