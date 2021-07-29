<?php
$name = null;

echo $name; // tidak show null
var_dump($name); // show null. selalu guna utk debug

$age; // variable yg di define tetapi tidak di assign value

var_dump($age);

$car = 'volvo';
// "volvo" is a car 
// echo '"$car" is a car'; // not working
echo "\"$car\" is a car"; // \ = escape character
echo '"' . $car . '" is a car';