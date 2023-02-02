<?php
// -------------- ARRAYS
//Array hold multiple values. Each value in an array is called "element"

//Simple array of numbers
// $numbers = [1,2,3,4,5];
// $fruits = ['apple', 'orange', 'banana'];

// echo $numbers[0];
// var_dump($numbers);
// echo $fruits[1];
// echo $numbers[2] + $numbers[3];

//Associative Arrays
// -> Allows us to use named keys to identify values
// $colors = [
//     1 => 'red',
//     2 => 'green',
//     3 => 'blue',
//     4 => 'yellow',
// ];

// echo $colors[4];

// Strings as keys
// $hex = [
//     'red' => '#f00',
//     'green' => '#0f0',
//     'blue' => '#00f',
// ];

// echo $hex['red'];
// var_dump($hex);


//Multi-Dimensional Arrays - array inside of an array -> used to store data in a table format

// Single Person

// $person = [
//     'first_name' => 'Andres',
//     'last_name' => 'Elacion',
//     'email' => 'andreielacion5@gmail.com'
// ];

// echo $person ['first_name'];

$people = [
    [
    'first_name' => 'Andres',
    'last_name' => 'Elacion',
    'email' => 'andreielacion5@gmail.com'
    ],
    [
        'first_name' => 'Juan',
        'last_name' => 'Dela Cruz',
        'email' => 'DelaCruz@gmail.com'
        ],
        [
            'first_name' => 'Maria',
            'last_name' => 'Santos',
            'email' => 'Santosm@gmail.com'
            ],
];

echo $people[2]['last_name'];

// Encode to JSON
// var_dump(json_encode($people));

//Decode to JSON
$jsonobj = '{"first_name":"Andres","last_name":"Elacion","email":"andreielacion5@gmail.com"}';
var_dump(json_decode($jsonobj));








?>