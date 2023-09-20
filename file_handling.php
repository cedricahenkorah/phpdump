<?php

/* ---- file handling ---- */

/*
file handling is the ability to read and write files on the server. PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';

// check if the file exists
if (file_exists($file)) {
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'kirk' . PHP_EOL . 'yvette' . PHP_EOL . 'benitta';
    fwrite($handle, $contents);
    fclose($handle);
}