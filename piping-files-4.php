<?php

$handle1 = fopen(
    "https://github.com/assertchris/uploads/raw/master/rick.jpg", "r"
);

$handle2 = fopen(
    "piping-files-4.jpeg", "w"
);

stream_copy_to_stream($handle1, $handle2);

fclose($handle1);
fclose($handle2);

require "memory.php";
