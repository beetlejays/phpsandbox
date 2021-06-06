<?php
###### CONDITIONALS

/*
==
===
<
>
<=
>=
!=
!==
 */

/* $num = 4; // Just data type

if ($num == 5) {
echo "five passed";
} elseif ($num == 6) {
echo "six passed";
} else {
echo "did not pass";
}
 */

######### NESTING IF STATEMENTS

$num = 5;
/* if ($num > 4) {
if ($num < 10) {
echo "$num passed";
}
} */

/*
##########  LOGICAL OPERATORS
&&
||
xor  // has to be true, but not both
 */

/* if ($num > 4 && $num < 10) { // both have to be true
echo "$num passed";
}

if ($num > 4 || $num < 10) { // one of the condition is true, still passes
echo "$num passed";
}
 */

######### SWITCH STATEMENTS

$favColor = "red";

switch ($favColor) {
    case "red":
        echo "Your favorite color is red";
        break;
    case "blue":
        echo "Your favorite color is blue";
        break;
    case "green":
        echo "Your favorite color is green";
        break;
    default:
        echo "Your favorite Color is something else";
}
