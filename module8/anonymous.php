<?php
$multiply = function ($x, $y) {
  return $x * $y;
};

echo $multiply(10, 20);// output : 200

$message = 'Hi'; // global
$say = function () use ($message) {
  echo $message;
};

$say(); // output : Hi