<?php
// dlm php <= 5.6, boleh combine array guna tanda '+'
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = $arr1 + $arr2; // support php  <= 5.6
print_r($arr3); 