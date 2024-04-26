<?php

//Виведіть на екран всі числа від 1 до 10 використовуючи цикл while

$i = 1;
while ($i <= 10) {
    echo $i++ . PHP_EOL;
}

//Обчисліть факторіал числа 5 використовуючи цикл while.

$num = 5;
$factorial = 1;
$i = 1;
while ($i <= $num) {
    $factorial *= $i;
    $i++;
}

echo "Факторіал числа $num: $factorial" . PHP_EOL;

//Виведіть на екран всі парні числа від 1 до 20 використовуючи цикл while.

$i = 2;

while ($i <= 20) {
    echo $i . PHP_EOL;
    $i += 2;
}

