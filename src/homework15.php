<?php

require_once __DIR__ . '/classes/figure.php';
require_once __DIR__ . '/classes/circle.php';
require_once __DIR__ . '/classes/rectangle.php';

$rectangle = new Rectangle(5, 3);
$circle = new Circle(4);

echo "Rectangle:<br>";
echo "Area: " . $rectangle->getArea() . "<br>";
echo "Perimeter: " . $rectangle->getPerimeter() . "<br>";

echo "<br>Circle:<br>";
echo "Area: " . $circle->getArea() . "<br>";
echo "Perimeter: " . $circle->getPerimeter() . "<br>";