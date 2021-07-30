<?php
// global and local scope lifetime of a variable
$x = 5; // global scope
function myTest() {
    global $x;
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

$x = 10;
myTest();

//echo "<p>Variable x outside function is: $x</p>";

function myTest2() {
    $y = 5; // local scope
    //echo "<p>Variable y inside function is: $y</p>";
}
myTest2();
  
// using x outside the function will generate an error
//echo "<p>Variable y outside function is: $y</p>";