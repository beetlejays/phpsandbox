<?php
#### FUNCTION - is block of code that can be repeadeatly called

/*
Camel Case - myFunction()
Lower Case - my_function()
Pascal Case - MyFunction()
 */

// Create simpleFunction
function simpleFunction()
{
    echo "hello world";
}
// Run simpleFunction
// simpleFunction();

// Function with Params
function sayHello($name = "World")
{ // Default params "world"
    echo "Hello $name <br>";
}

// sayHello("John");
// sayHello("bob");
// sayHello("Tim");

// Return Value
function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}

// echo addNumbers(2, 3);

// By Refernce
$myNum = 10;

function addFive($num)
{
    $num += 5;
}

function addTen(&$num)
{ // by reference params
    $num += 10;
}

addFive($myNum);
echo "My value ist: $myNum ";

addTen($myNum);
echo "my value is: $myNum";
