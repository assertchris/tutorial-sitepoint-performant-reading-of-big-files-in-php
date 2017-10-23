<?php

file_put_contents(
    "piping-files-3.jpeg", file_get_contents(
        "https://github.com/assertchris/uploads/raw/master/rick.jpg"
    )
);

require "memory.php";
