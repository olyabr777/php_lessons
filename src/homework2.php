<?php

echo("What is your name?\n");
$name = trim(fgets(STDIN));

echo("Hi, $name. I'm calculator.\n");
echo("Please enter first value \n");
$value1 = (float)trim(fgets(STDIN));

echo("Please enter second value \n");
$value2 = (float)trim(fgets(STDIN));

$sum = $value1 + $value2;
$average = $sum / 2;

echo "Sum of two values: $sum \n";