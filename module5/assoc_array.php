<?php
// associative array. ada key => value
$arr_people = array('name' => 'azman', 'addr' => 'bangi');
//echo $arr_people['name']; // output azman
//echo $arr_people['addr']; // output bangi

// create assoc array guna []
$arr_cars = [
    'name' => 'toyota',
    'country' => 'Japan',
];

//echo $arr_cars['name']; // output toyota

// push / insert data
$arr_cars['year'] = 2021;
// print_r($arr_cars);

// update data
$arr_cars['name'] = 'Nissan'; // ganti toyota dgn nissan
//print_r($arr_cars);

// delete data 
unset($arr_cars['name']);
print_r($arr_cars);