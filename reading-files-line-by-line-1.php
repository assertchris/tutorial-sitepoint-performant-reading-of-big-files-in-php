<?php

function readTheFile($path) {
    $lines = [];
    $handle = fopen($path, "r");

    while(!feof($handle)) {
        $lines[] = trim(fgets($handle));
    }

    fclose($handle);
    return $lines;
}

readTheFile("shakespeare.txt");

require "memory.php";
