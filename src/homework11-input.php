<?php

echo("Enter data?\n");
$data = trim(fgets(STDIN)) . "\n";
$path = "logs/log.txt";
file_put_contents($path, $data, FILE_APPEND);