<?php
class Pi {
  public static $value = 3.14159;

  public function staticValue() {
    return self::$value;
  }

  public static function getValue() {
      return self::$value;
  }
}

// Get static property
echo Pi::$value; // output : 3.14159
echo Pi::getValue(); // output : 3.14159

$pi = new Pi();
echo $pi->staticValue(); // output : 3.14159