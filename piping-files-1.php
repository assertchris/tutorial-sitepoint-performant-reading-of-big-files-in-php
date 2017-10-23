<?php

file_put_contents(
    "piping-files-1.txt", file_get_contents("shakespeare.txt")
);

require "memory.php";
