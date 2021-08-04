<?php
define("GREETING", "Welcome to W3Schools.com! \r\n");
echo GREETING;
// check whether constant already exist. return true / false
if (! defined('HELLO')) {
    echo 'constant HELLO not defined';
}


// constant global. can access from anywhere
function myTest() {
    echo GREETING . "\r\n";
}
   
myTest();

// magic constant
echo __FILE__ . "\r\n"; // return nama file
echo __DIR__; // return current directory