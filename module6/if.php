<?php
// if statement
$t = date("H"); // return date dlm string format. i.e 30/07/2021. H = hour (24 jam)
// t = 11
if ($t < "20") {
  echo "Have a good day!";
}
