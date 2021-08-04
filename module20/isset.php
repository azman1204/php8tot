<?php
$a = 0;
// True because $a is set
if (isset($a)) {
  echo "Variable 'a' is set.<br>";
}

//$b = null;
$b;
// False because $b is NULL
if (isset($b)) {
  echo "Variable 'b' is set.";
}

if(! isset($c)) {
    echo 'Variable c is not exist';
}