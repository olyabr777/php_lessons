<?php 

function number_modify( int $number ): int{
    $number += 10;
    return $number;
}

$number = 20;
$result = number_modify($number);

echo($result . PHP_EOL);

function number_modify_link(  int &$number ): void{
    $number += 10;
}

$number2 = 20;
number_modify_link($number2);

echo($number2 . PHP_EOL);