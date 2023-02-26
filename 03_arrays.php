<?php
$numers=[1,2,3,4,5,6,7,8,9,10];
$fruits=array('apple','banana','orange','grapes');

// print_r($fruits);
// echo $fruits[2];
// var_dump($fruits);

//associative array
// $colors=[
//   1=>'#f00',
//   2=>'#0f0',
//   3=>'#00f'
// ];

// echo $colors[1];

// $colors=['red'=>'#f00','green'=>'#0f0','blue'=>'#00f'];

// echo $colors['red'];

// Strings as keys
// $hex = [
//   'red' => '#f00',
//   'green' => '#0f0',
//   'blue' => '#00f',
// ];

// echo $hex['red'];
// var_dump($hex);

/* ---- Multi-dimensional arrays ---- */

/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person
$person1 = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];

var_dump($people);

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo $people[2]['email'];

// // Encode to JSON
var_dump(json_encode($people));

// // Decode from JSON
$jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
var_dump(json_decode($jsonobj));