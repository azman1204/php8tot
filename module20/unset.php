<?php
$a = "Hello world!";
echo "The value of variable 'a' before unset: " . $a . "\r\n";
unset($a); // destroy
echo "The value of variable 'a' after unset: " . $a . "\r\n";

$arr = [1,2,3,4,5];
echo "index 1 = " . $arr[1]; // output : 2
unset($arr[1]);
echo "index 1 = " . $arr[1]; // output : null