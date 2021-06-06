<?php

####### Date

// echo date("d"); // Day
// echo date("m"); // Month
// echo date("y"); // Year
// echo date("l"); // Day of the week

// echo date("d.m.y");

// echo date("h"); // Hour
// echo date("i"); // Min
// echo date("s"); // Seconds
// echo date("a"); // AM or PM

// Set Timezone
date_default_timezone_set("America/New_York");

// echo date("h:i:sa");

$timestamp = mktime(10, 14, 54, 9, 19, 1981); // timestamp in Seconds

// echo $timestamp;
// date converts Timestamp into readable format
// echo date("m/d/y h:i:sa", $timestamp);

$timestamp2 = strtotime('7:00pm March 22 2016');
$timestamp3 = strtotime("tomorrow");
$timestamp3 = strtotime("next Sunday");
$timestamp3 = strtotime("#2 months");
$timestamp3 = strtotime("#2 days");
// echo $timestamp2;
echo date("m/d/y", $timestamp3);
