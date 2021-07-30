<?php
$favcolor = "red";
switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

if ($favcolor == 'red') {
    echo "Your favorite color is red!";
} elseif ($favcolor == 'blue') {
    echo "Your favorite color is blue!";
} elseif ($favcolor == 'green') {
    echo "Your favorite color is green!";
} else {
    echo "Your favorite color is neither red, blue, nor green!";
}