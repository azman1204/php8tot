<?php
declare(strict_types = 1);

function returnIntValue(int $value) : int {
  return $value;
}

print(returnIntValue(5));

function printme(Car $c) : string {
    return "function = " . __function__;
}

class Car {}
$car = new Car();
echo printme($car);