<?php

function multiply(int $a, int $b, ?Closure $callback = null): int {
    $result = $a * $b;
    if ($callback instanceof Closure) {
        $callback($result);
    }
    return $result;
}

$extramultiply = function (int $arg): void {
    echo $arg * 2;
};

$x = 5;
$y = 10;

echo "Результат без анонімної функції: " . multiply($x, $y) . "\n";

echo "Результат з анонімною функцією: ";
multiply($x, $y, $extramultiply);
echo "\n";