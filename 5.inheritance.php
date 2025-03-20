<?php

class Fruit {
  public $name;
  public $color;


  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }


  protected function intro() {
    echo "La fruta es: {$this->name} y su color es: {$this->color}.";
  }
}
//Herencia , la clase "Strawberry" usa el keyword "extends" para heredar de "Fruit"

class Strawberry extends Fruit {

  public function message() {
    echo "Am I a fruit or a berry? ";
    
    // Se llama un método protegido desde dentro de la clase derivada 
    $this -> intro();
    
  }
}

$strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() es public
$strawberry->message(); // OK. message() es public y este, a su vez llama a  intro() (que es protected) 
// $strawberry->intro(); // ERROR: intro() es protected