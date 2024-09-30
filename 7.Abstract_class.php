<?php
// Clase padre (Clase abstracta--contiene al menos un metodo abstracto--)
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }

  //Metodo abstracto
  //Se usa a modo de plantilla para que las demas la definan a su forma
  //Las clases hijas tambien pueden definir argumentos adicionales 
  abstract public function intro() : string;
}

// Clases hijas
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!";
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
?>