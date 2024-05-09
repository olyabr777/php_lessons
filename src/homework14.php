<?php

require_once __DIR__ . '/inc/homework14-classes.php';

$text = new Text();
$uppercaseText = new UppercaseText();

echo "text: ";
$text->print();
echo "<br>";

echo "Uppercase text: ";
$uppercaseText->print();
