<?php

$path = "logs/log.txt";

// $content = file_get_contents($path);
// echo $content;

$file = fopen( $path, 'r');

$content = []; 

while (($line = fgets($file)) !== false){
    $content[] = trim($line);
}

fclose($file);

print_r($content);
