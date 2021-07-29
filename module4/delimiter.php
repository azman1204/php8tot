<?php
$string = "123,46,78,000"; // delimiter = ,
$str_arr = explode (",", $string); // $str_arr ['123', '46', '78', '000']
print_r($str_arr); // ini mcm var_dump, but utk array
echo $str_arr[1];