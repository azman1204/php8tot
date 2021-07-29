<?php
// about AND, OR, NOT, Exclusixe OR

$x = true;
$y = false;
$z = $x && $y;
if ($z) {
    echo "TRUE";
} else {
    echo "FALSE";
}

$z = true and 'abc'; // && = and , || = or , ! = not
if ($z) {
    echo "TRUE";
} else {
    echo "FALSE";
}