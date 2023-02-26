<?php
/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name="Andy"; //String
$age=30; //Integer
$has_kids=false; //Boolean
$cash_on_hand=100.50; //Float

// echo $name;

// echo $name . " es un string"; //Concatenation
// echo  "$name es un string"; //Concatenation
// echo  "${name} es un string"; //Concatenation
// Concatenate Strings
// echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';

// $x="5"+"5";
// var_dump($x);
// Arithmetic Operators
// echo 5 + 5;
// echo 10 - 6;
// echo 5 * 10;
// echo 10 / 2;

// Constants - Cannot be changed
define('HOST', 'localhost');
define('USER', 'root');

var_dump(HOST);