<?php
/* ---- operators ---- */

/*
< less than
> greater than
<= less than or equal to
>= greater than or equal to
== equal to
=== identical to
!= not equal to
!== not identical to
*/

/* ---- if statements ---- */
/*
** if statements syntax
if (condition) {
    // code to be executed if condition is true
}
*/

$age = 20;

if ($age >= 18) {
    echo "you are old enough to drink";
} else {
    echo 'sorry you are not old enough to drink';
};

$t = date("H");

if ($t < 12) {
    echo "good morning";
} elseif ($t < 17) {
    echo "good afternoon";
} else {
    echo "good evening";
}

$posts = ["first post"];

// check if post is empty
if (!empty($posts)) {
    echo $posts[0];
} else {
    echo "nothing here yet";
}

/* ---- ternary operators ---- */
echo !empty($posts) ? $posts[0] : "no posts";

$firstPost = !empty($posts) ? $posts[0] : "no posts";
echo $firstPost;

$secondPost = $posts[0] ?? null;
echo $secondPost;

/* ---- switch ---- */
$favcolor = 'black';

switch ($favcolor) {
    case 'red':
        echo 'fav color is black';
        break;
    case "blue":
        echo 'fav color is blue';
        break;
    case 'black':
        echo 'fav color is black';
        break;
    default:
        echo 'no fav color exist';
}