<?php
/* ---- for loop ---- */

/*
** for loop syntax
for (initialize; condition; increment) {
    // code to be executed
}
*/

for ($x = 0; $x <= 10; $x++) {
    echo 'number' . $x . '<br>';
}

/* ---- while loop ---- */

/*
** while loop syntax
while (condition) {
    // code to be executed
}
*/

$y = 1;

while ($y <= 15) {
    echo 'number' . $y . '<br>';
    $y = $y + 1;
}

/* ---- do while loop ---- */

/*
** do while loop syntax
do {
    // code to be executed
} while (condition);

do while loop will always execute the block of code once, even if the condition is false
*/

$a = 1;

do {
    echo "value" . $a . '<br>';
    $a++;
} while ($a <= 5);

/* ---- foreach loop ---- */

/*
** foreach loop syntax
foreach ($array as $value) {
    // code to be executed
}
*/

$posts = ['first', 'second', 'third'];

foreach ($posts as $post) {
    echo 'hello' . $post;
}

// get index
foreach ($posts as $index => $post) {
    echo $index + 1 . " - " . $post . '<br>';
}

$person = [
    'first_name' => 'test',
    'last_name' => 'user',
    'email' => 'test@mail.com'
];

foreach ($person as $key => $value) {
    echo "$key - $value<br>";
}