<?php

$zip = new ZipArchive();
$filename = "filters-1.zip";

$zip->open($filename, ZipArchive::CREATE);
$zip->addFromString("shakespeare.txt", file_get_contents("shakespeare.txt"));
$zip->close();

require "memory.php";
