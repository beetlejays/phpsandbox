<?php
#### LOOPS - Execute code a set number of times

/*
For
While
Do..While
Foreach
 */

################# For Loop
################# @params - init, condition, increment

/* for ($i = 0; $i <= 10; $i++) {
echo "Number " . $i;
echo "<br>";
} */

################# While Loop / Is used when you don´t know the condition
################# @params - condition

/* $i = 0;

while ($i < 10) {
echo $i;
echo "<br>";
$i++;
}
 */

################# Do...While Loop / Always going to run once / Code runs in do
################# @params - condition

/* $i = 0;

do {
echo $i;
echo "<br>";
$i++;
} while ($i < 10);

echo $i;
 */

################# Foreach Loop / Is meant for arrays
################# @params - array

/* $people = ["brad", "jose", "william"];

foreach ($people as $person) {
echo $person;
echo "<br>";
} */

##################### With associative arrays

/* $people = [
"brad" => "hello@gmail",
"jose" => "sadfa@yahoo.com",
"william" => "asds@af.org",
];

foreach ($people as $person => $email) {
echo $person . ": " . $email;
echo "<br>";
}
 */
