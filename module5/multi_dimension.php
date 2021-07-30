<?php
// multi dimensional array

// 2 dimensional array
$arr = [
    [1,2,4],
    [5,5,5]
];

//echo $arr[0][1]; // output 2

// 2 dimensional array
$arr2 = [
    'no'   => [1,2,3], 
    'name' => ['abu', 'ali', 'john']
];
//echo $arr2['no'][2]; // output 3

// 3 dimensional array
$students = [
    ['name' => 'ali', 'score' => ['fizik' => 90, 'bio' => 95]],
    ['name' => 'abu', 'score' => ['fizik' => 80, 'bio' => 85]],
];
// print markah bio yg diperoleh abu
echo $students[1]['score']['bio']; // output 85