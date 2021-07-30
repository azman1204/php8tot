<?php
$x = 5;
if ($x >= 5) {
    echo "x lebih besar atau sama 5";
} else {
    echo "x lebih kecik dari 5";
}

echo $x >= 5 ? "echo x lebih besar atau sama 5" : "x lebih kecik dari 5";

// output
// x lebih besar atau sama 5x lebih besar atau sama 5

// spaceship operator
$x = 7;
$y = 7;
$z = $x <=> $y; // -1, 0, 1
echo $z;