<?php
# Array - Variable that holds multiple values
/*
- Indexed
- Associative
- Multi-dimensional
 */

// Indexed

$people = array("Kevin", "Jeremy", "Sara");
$ids = array(23, 55, 12);
$cars = ["Honda", "Toyota", "Ford"];
$cars[3] = "Chevy";
$cars[] = "BMW"; // added to last position of the array

// echo count($cars);
// print_r($cars);            // prints out the entire array on the screen
// var_dump($cars);           // shows data type and shows each key and values

// echo $people[3];
// echo $ids[2];
// echo $cars[4];

########## Associative arrays // Key and value
$people = [
    "brad" => 35,
    "Jose" => 32,
    "William" => 37,
];
$ids = [
    22 => "Brad",
    44 => "Jose",
    53 => "William",
];

// echo $people["brad"];
// echo $ids[44];
// $people["Jill"] = 42; //Adds onto array automatically at the end
// echo $people["Jill"];
// print_r($people);
var_dump($people);

########## Multidimensional arrays // Key and value

$cars = [
    ["Honda", 20, 10],
    ["Toyota", 30, 20],
    ["Ford", 23, 12],
];
echo $cars[2][1]);
