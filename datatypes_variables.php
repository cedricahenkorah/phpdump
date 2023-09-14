<?php
/* ---- PHP DATA TYPES ---- */
/*
1. String
2. Integer
3. Float
4. Boolean 
5. Array 
6. Object 
7. NULL 
8. Resource - special variable that holds a resource
*/

/* ---- Variable Rules (for naming) ---- */
/*
- variables must be prefixed with $
- variables must start with a letter or the underscore character
- variables can't start with a number
- variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _)
-variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "cedric"; // string
$age = 22; // Int
$has_cash = true; // boolean
$cash_on_hand = 100.99; // float

echo $name, $age;
var_dump($has_cash);
var_dump($cash_on_hand);

/* ---- variables within a string ---- */
// echo $name . ' is ' . $age . ' years old';
echo "$name is $age years old";

$x = '10' + '9';
var_dump($x);
echo 9-3;
echo 10 * 2;
echo 4 / 2;
echo 30 % 3;

/* ---- constants ---- */
define('PORT', 'port5000');
define('DB_NAME', 'mongo db');

echo PORT;
echo DB_NAME;