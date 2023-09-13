<?php
// echo - output strings, numbers, html etc
echo 987, 'just setting up php', 9.99;

// print - works like echo but can only take a single argument
print "cedric";

// print_r() - print single values and arrays
// print_r([2, 4, 6]);

// var_dump() - returns data type and length
var_dump(true);

// var_export() - outputs a string representation of a variable
var_export('hello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= 'php title'; ?></h1>
</body>
</html>