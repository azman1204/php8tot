<?php
// combine numeric array and assoc. array
$students = [
    ['name' => 'azman', 'ic' => 1234],
    ['name' => 'ali',   'ic' => 5678],
    ['name' => 'Raj',   'ic' => 9101],
];

// print maklumat student ali
echo "Nama = {$students[1]['name']} IC = {$students[1]['ic']}"; // output Nama = ali IC = 5678
// bg data yg complex, i.e array in array, guna {} utk echo data