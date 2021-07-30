<?php
// class ada 2 members: 1. property, 2. method
class Fruit {
  // Properties
  public $name = 'Jambu Batu';
  public $color = 'Hijau';

  // ada 2 kali _
  function __construct($name) {
    $this->name = $name;
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

$apple = new Fruit('Apple');
$banana = new Fruit('Banana');
$apple->setName('Apple');
$banana->setName('Banana');

echo $apple->getName();
echo "<br>";
echo $banana->getName();
// output : Apple<br>Banana
?>