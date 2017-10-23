<?php

function readTheFile($path) {
    $handle = fopen($path, "r");

    while(!feof($handle)) {
        yield trim(fgets($handle));
    }

    fclose($handle);
}

$count = 0;
$largest = 0;
$buffer = "";

$iterator = readTheFile("shakespeare.txt");

foreach ($iterator as $iteration) {
    preg_match("/\n{3}/", $buffer, $matches);

    if (count($matches)) {
        print ".";

        if (mb_strlen($buffer) > $largest) {
            $largest = mb_strlen($buffer);
        }

        $buffer = "";
        $count++;
    } else {
        $buffer .= $iteration . PHP_EOL;
    }
}

print $count . PHP_EOL;
print $largest . PHP_EOL;

require "memory.php";
