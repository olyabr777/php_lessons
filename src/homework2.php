<?php

echo("What is your name?\n");
$name = trim(fgets(STDIN));

echo("Hi, $name. I'm sum calculator.\n");
echo("Please enter first value \n");
$value1 = trim(fgets(STDIN));

echo("Please enter second value \n");
$value2 = trim(fgets(STDIN));

$sum = $value1 + $value2;

echo "Sum of two values: $sum \n";