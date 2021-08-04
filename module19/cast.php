<?php
// casting / conversion
// explicit
$x = 5.35;
$y = (int) $x; // cast $x to integer
var_dump($y);

// implicit
$x = 2; 
$y = 4;
var_dump($x / $y); // 2/4 = 0.5 (Float)
var_dump($y / $x); // 4/2 = 2 (Int)

$foo = "5bar"; // string
$bar = true;   // boolean

settype($foo, "integer"); 
settype($bar, "string");  
var_dump($foo); // $foo is now 5   (integer)
var_dump($bar); // $bar is now "1" (string)

var_dump((int) $foo);
var_dump((string) $bar);