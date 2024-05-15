<?php

require_once __DIR__ . '/classes/AnimalTraits.php';
require_once __DIR__ . '/classes/Dog.php';
require_once __DIR__ . '/classes/Cat.php';

$dog = new Dog("Тофа", 3);
echo $dog->eat("кістки");
echo $dog->bark();
echo $dog->sleep();

$cat = new Cat("Алiса", 2);
echo $cat->eat("рибу");
echo $cat->meow();
echo $cat->sleep();