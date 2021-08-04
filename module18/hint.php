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

// callable / anonymous
$tambah = function($no1, $no2) {
  return $no1 + $no2;
};

function cetak(int $num1, int $num2, callable $func) : int {
  return $func($num1, $num2);
}

echo cetak(4, 3, $tambah);