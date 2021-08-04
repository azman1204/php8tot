<?php
var_dump(empty(''));        // true
var_dump(empty('0'));       // true
var_dump(empty(0));         // true
var_dump(empty(null));      // true
var_dump(empty([]));        // true
var_dump(empty(false));     // true

var_dump(empty('false'));   // false
var_dump(empty('true'));    // false