<?php

$data = join("&", [
    "twitter=assertchris",
]);

$headers = join("\r\n", [
    "Content-type: application/x-www-form-urlencoded",
    "Content-length: " . strlen($data),
]);

$options = [
    "http" => [
        "method" => "POST",
        "header"=> $headers,
        "content" => $data,
    ],
];

$context = stream_content_create($options);

$handle = fopen("https://example.com/register", "r", false, $context);
$response = stream_get_contents($handle);
fclose($handle);