<?php

// single line comment
# single line comment

/*
Multiline
comment
 */

#VARIABLES
/*
- Prefix $
- Start with a letter or an underscore
- Only letters, numbers and underscores
- Case sensitive
 */

# DATATYPES
/*
String
Integers (Numbers)
Floats
Booleans
Arrays
Objects
NULL
Resource
 */

$output = "Hello world";

$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;

$string1 = "hello";
$string2 = "World";
$greeting = $string1 . " " . $string2 . "!";
$greeting2 = "$string1 $string2";

$string3 = 'They\'re here'; // Escaping Character or "they´re here"

$float1 = 4.4;
$bool1 = true;

define("GREETING", "Hello Everyone", true); // Constant // true removes case-sensitivity

echo GREETING;
