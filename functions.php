<?php
$y = 9;

function registerUser($email) {
    global $y;
    echo $y;
    $x = 3;
    echo $email . 'registered';
}

registerUser('test@mail.com');

function sum($n1 = 4, $n2 = 7) {
    return $n1 + $n2;
}

$number = sum(8, 5);
echo $number;

// anonymous functions
$subtract = function($n1, $n2) {
    return $n1 - $n2;
};

echo $subtract(20, 11);

// arrow functions
$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(10, 10);