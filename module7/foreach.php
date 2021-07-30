<?php
// loop khas utk array

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $warna) {
  //echo "$warna \r\n";
}

$students = [
    ['name' => 'ali', 'ic' => 1234],
    ['name' => 'abu', 'ic' => 5678],
];

foreach ($students as $stu) {
    //echo "Name = {$stu['name']} IC = {$stu['ic']} \r\n";
}
// output
// Name = ali IC = 1234
// Name = abu IC = 5678

$person = [
    'name' => 'John doe',
    'addr' => 'London',
    'age' => 40
];

// loop over person ?
foreach ($person as $key => $val) {
    //echo "$key = $val \r\n";
}

foreach ($person as $val) {
    echo "$val \r\n";
}