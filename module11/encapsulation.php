<?php
// encapsulation idea ialah hide kan semua data / property
class Fruit {
  private $name;
  private $color;
  private $weight;

  public function setName($n) {  // a public function (default)
    $this->name = $n;
  }

  public function setColor($n) { // a protected function
    $this->color = $n;
  }

  public function setWeight($n) { // a private function
    $this->weight = $n;
  }

  public function print() {
      echo "Name : {$this->name} Color: {$this->color} weight:{$this->weight}g";
  }
}
$mango = new Fruit();
$mango->setName('Mango'); // OK
$mango->setColor('Yellow'); // OK
$mango->setWeight('300'); // OK
$mango->print(); // output : Name : Mango Color Yellow weight:300g