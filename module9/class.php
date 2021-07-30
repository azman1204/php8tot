<?php
// class ada 2 members: 1. property, 2. method
class Fruit {
  // Properties
  public $name = 'Jambu Batu';
  public $color = 'Hijau';

  // ada 2 kali _. parameter boleh 0 OR many
  function __construct($name) {
    $this->name= $name;
  }

  // auto run just before obj di destroy automatically
  function __destruct() {
    echo "The fruit is {$this->Name}.";
  }

  // Methods
  function setName($name) {
    $this->name = $name;
  }

  function getName() {
    return $this->name;
  }
}

// objet
$jambu = new Fruit('Jambu batu');
echo $jambu->getName(); // output : Jambu batu
var_dump($jambu);

$apple = new Fruit('Apple');
$banana = new Fruit('Banana');
$apple->setName('Apple');
$banana->setName('Banana');

echo $apple->getName();// output : Apple
echo "<br>";
echo $banana->getName();// output: Banana
// output : The fruit is Banana.The fruit is Apple.The fruit is Jambu batu.
?>