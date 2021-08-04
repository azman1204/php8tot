<?php
class Fruit {
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class Strawberry extends Fruit {
  public $weight;
  // initialize / bg default value
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }

  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
  }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();
// output : The fruit is Strawberry, the color is red, and the weight is 50 gram.
$strawberry->weight = 65;
$strawberry->color = 'yellow';
$strawberry->intro();
// output  : The fruit is Strawberry, the color is yellow, and the weight is 65 gram.