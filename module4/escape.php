<?php
// escape character "\"
echo 'My name is \'Azman\''; // output = My name is 'Azman'

// character reference
$str = chr(43); // +
$str2 = chr(61); // =
echo("2 $str 2 $str2 4"); // output = 2 + 2 = 4

// chr(10) = new line chr(13) = carriage return \r\n
echo "abc " . chr(10) . "def";
echo "123 \r\n 456";