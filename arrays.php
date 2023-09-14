<?php
// simple array
$numbers = [1,2,3,4];
$fruits = array('apple', 'mango', 'pear');

var_dump($numbers);

// print out a specific value
echo $fruits[1];

// associative array - create the index
$colors = [
    1 => 'blue',
    4 => 'yellow',
    6 => 'white'
];

echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

echo $hex['blue'];

$person = [
    'first_name' => 'test',
    'last_name' => 'user',
    'email' => 'testuser@mail.com'
];

echo $person['email'];

// multi-dimensional arrays - arrays within arrays
$people = [
    [
        'first_name' => 'test',
        'last_name' => 'user',
        'email' => 'testuser@mail.com'
    ],
    [
        'first_name' => 'option',
        'last_name' => 'user',
        'email' => 'optionuser@mail.com'
    ],
    [
        'first_name' => 'random',
        'last_name' => 'admin',
        'email' => 'randomadmin@mail.com'
    ]
    ];

echo $people[2]['last_name'];

// transform arrays to json
var_dump(json_encode(($people)));