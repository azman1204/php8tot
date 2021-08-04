<?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! ";
  }
}

class Welcome {
    use message1;
}

class Car {
    use message1;
}

$obj = new Welcome();
$obj->msg1(); // output : OOP is fun!

$car = new Car();
$car->msg1();// output : OOP is fun!