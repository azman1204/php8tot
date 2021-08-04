<?php
interface Animal {
  public function makeSound(); // wajib di implement dlm class
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

class Chicken implements Animal {
    public function makeSound() {
        echo "Kokdooo";
    }
}

$animal = new Cat();
$animal->makeSound(); // output : moew
$chicken = new Chicken();
$chicken->makeSound(); // output : kokdoo
