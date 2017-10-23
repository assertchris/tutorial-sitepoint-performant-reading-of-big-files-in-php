<?php

$handle1 = fopen("shakespeare.txt", "r");
$handle2 = fopen("piping-files-2.txt", "w");

stream_copy_to_stream($handle1, $handle2);

fclose($handle1);
fclose($handle2);

require "memory.php";
