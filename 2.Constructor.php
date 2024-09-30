<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {// los constructores son para asignar valores de los objetos 
    // El proceso que tienen que tener los objetos para ser asignados se describe con un constructor 
    $this->name = $name;
    $this->color = $color;
  }

  //Getters para retornar valores  
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>