<?php
$a = "hello";
$b = "world";
$c = $a . " " . $b;
echo $c; // output = hello world

// concatenation
$d = "welcome to PHP training ";
$d .= $c;
echo $d; // output = welcome tp PHP training hello world

// Interpolation
echo "\n";
echo "$d $a $b"; // output = welcome tp PHP training hello world hello world

echo "\n";
$arr = [1,2,3];
echo "array index 1 = $arr[1]"; // output = array index 1 = 2

echo "\n";
$person = new stdClass();
$person->name = 'azman';
echo "my name is $person->name"; // output = my name is azman