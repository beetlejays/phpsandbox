<?php

# substr()
###### Returns a portion of a string
// $output = substr("Hello", 1, 3);
// $output = substr("Hello", -2);
// echo $output;

##############################################################

# strlen();
###### Returns the length of a string
// $output = strlen("Hello World");
// echo $output;

##############################################################

#strpos()
# Finds the position of the first occurence of a substring
// $output = strpos("Hello Wold", "o");
//echo $output;

##############################################################

#strrpos()
# Finds the position of the last occurence of a substring
// $output = strrpos("Hello Wold", "o");
// echo $output;

##############################################################

#trim()
# Strips away whitespace
// $text = "hello world     ";
// $trimmed = trim($text);
// var_dump($trimmed);

##############################################################

#strtoupper()
# Makes everything to uppercase
// $output = "Hello World";
// $str = strtoupper($output);
// echo $str;

##############################################################

#strtolower()
# Makes everything to uppercase
// $output = "Hello World";
// $str = strtolower($output);
// echo $str;

##############################################################

#ucwords()
# Capitalize each word
// $output = ucwords("Hello World");
// echo $output;

##############################################################

#str_replace()
# Replace all occurences of a search string with a replacement
// $text = "Hello World";
// $output = str_replace("World", "Everyone", $text);
// echo $output;

##############################################################

#is_string()
# Check if it is a string
// $val = "Hello";
// $output = is_string($val);
// echo $output;

/* $values = [
true,
false,
null,
"abc ",
33,
"33",
22.2,
"22.4",
0,
"",
];

foreach ($values as $value) {
if (is_string($value)) {
echo "{$value} is a string <br>";
}
}
 */

##############################################################

#gzcompress()
# Compress a string

$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis veniam voluptatum incidunt quam non sequi pariatur, quisquam qui modi, amet alias, praesentium nam? Aliquid fuga odio tempore nemo voluptate nisi eveniet facere atque aliquam debitis quisquam sapiente officia aperiam quae hic enim minima maiores, vitae unde aspernatur quia neque! Qui quo voluptas voluptates facere ipsa laborum officia a, ut cupiditate.";

$compressed = gzcompress($string);
// echo $compressed;

$original = gzuncompress($compressed);
echo $original;
