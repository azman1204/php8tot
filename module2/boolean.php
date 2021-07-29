<?php
// $x = true; // output ok
// $x = 10; // output ok
// $x = 0; // output ko
// $x = 'azman'; // output ok
// $x = ''; // output ko
// $x = null; // output ko
// $x = [1,2,3]; // output ok
$x = []; // output ko

if ($x) {
    echo 'ok';
} else {
    echo 'ko';
}