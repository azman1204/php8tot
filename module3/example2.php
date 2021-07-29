<?php
$x = 1;
echo $x++; // output = 1

$y = 1;
echo ++$y; // output = 2

$x = 5;
echo $x--; // output = 5
echo $x; // output = 4

$y = 3;
echo --$y; // output = 2

echo '<hr>';

$a = 1; // basic assignment
echo ($a += 2) . "\n"; // read as '$a = $a + 2'; $a now is (1 + 2) => 3
echo ($a -= 1) . "\n"; // $a now is (3 - 1) => 2
echo ($a *= 2) . "\n"; // $a now is (2 * 2) => 4
echo ($a /= 2) . "\n"; // $a now is (4 / 2) => 2
echo ($a %= 5) . "\n"; // $a now is (2 % 5) => 2 (modulus or remainder)

// concatenate
$name = 'azman';
$name .= " zakaria"; // $name = $name . ' zakaria'
echo $name;