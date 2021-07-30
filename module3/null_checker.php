<?php
$y = null;
$z = 5;
$x = $y ?? $z;
echo $x; // output = 5

$y = 100;
$z = 5;
$x = $y ?? $z;
echo $x; // output = 100