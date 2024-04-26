<?php

echo 'Enter value' . PHP_EOL;
$color = intval(trim(fgets(STDIN)));

$result = match($color){
    1 => "green",
    2 => "red",
    3 => "blue",
    4 => "brown",
    5 => "violet",
    6 => "black",
    default => "white",
};

echo $result . PHP_EOL;