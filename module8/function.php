<?php
writeMsg(); // output hello world

// functions require 'function' keyword. function cannot start with a number (mcm variable)
// nama function tidak case-sensitif
// nama function camelCase (kebiasaanya)
function writeMsg() {
  //echo "Hello world! \r\n";
}

// function with parameter / arguments
// separate the parameters with a comma
function addFunction($num1, $num2) {
	$sum = $num1 + $num2;
	//echo "Sum of the two numbers is : $sum \r\n";
}

AddFunction(1, 2); // output: Sum of the two numbers is : 3
AddFunction(3, 4); // output: Sum of the two numbers is : 7

// function with default parameter, tak wajib pass value. ambil default val jika tidak di pass
// blah = wajib, x dan y = optional
function foo($blah, $x = null, $y = null) {
    if (null === $x) {
        $x = "some value";
    }

    if (null === $y) {
        $y = "some other value";
    }

    echo "x = $x y = $y \r\n";
}

foo('test'); // output : x = some value y = some other value
foo('test2', '1'); // output : x = 1 y = some other value
foo('test 3', '1', '2'); // output x = 1 y = 2
//foo(); // ERROR : Uncaught ArgumentCountError: Too few arguments to function foo()


// function return. kebanyakkan funcction akan return something
function getXYZ() 
{
    return array(4,5,6);
}

$arr = getXYZ();
print_r($arr);