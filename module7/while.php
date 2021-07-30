<?php
// warning: while boleh jadi forever loop jika condition alaways true
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

// x = 1,2,3,4,5,6
// output
// The number is: 1
// The number is: 2
// The number is: 3
// The number is: 4
// The number is: 5
?>