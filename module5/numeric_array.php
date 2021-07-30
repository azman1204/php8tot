<?php
// numeric array
$arr_cars = array('Toyota', 'Ford', 'Nissan'); // function array()
// cari data by index. index start dari 0
echo $arr_cars[1]; // output Ford

$arr_people = ['azman', 'abu', 'ali']; // create array guna []. php >= 5.5
echo $arr_people[2]; // outut ali

// assign / push value ke dlm array
$arr_people[] = 'John Doe'; // push last ke dlm array
print_r($arr_people);

// update / replace data
$arr_people[0] = 'Raj';
print_r($arr_people);

// combine array
$arr_combine = array_merge($arr_cars, $arr_people);
print_r($arr_combine); // print_r khas utk print array. guna utk debugging