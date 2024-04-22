<?php

$integer = 10;
$string = "10";
$float = 10.0;
$boolean = true;
$nullValue = null;

echo "Strict Comparison:<br>";
echo "Integer vs String: " . ($integer === $string) . "<br>";
echo "Integer vs Float: " . ($integer === $float) . "<br>";
echo "Boolean vs Integer: " . ($boolean === $integer) . "<br>";
echo "Boolean vs Boolean: " . ($boolean === $boolean) . "<br>";
echo "Null vs String: " . ($nullValue === $string) . "<br>";

echo "<br>Non-Strict Comparison:<br>";
echo "Integer vs String: " . ($integer == $string) . "<br>";
echo "Integer vs Float: " . ($integer == $float) . "<br>";
echo "Boolean vs Integer: " . ($boolean == $integer) . "<br>";
echo "Boolean vs Boolean: " . ($boolean == $boolean) . "<br>";
echo "Null vs String: " . ($nullValue == $string) . "<br>";
