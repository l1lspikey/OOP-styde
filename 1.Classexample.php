<?php

/*Para crear una clase se hace uso del keyword class*/
class Fruit {
  /* Propiedades (pueden ser publicas, privadas y protegidas)
    y se definen con su nivel de encapsulamiento y visibilidad mas en -->(Access modifiers.php)
    */
  public $name;
  public $color;


  // Metodos --> dictan el comportamiento que puede tomar un objeto
  //Ejemplo para asignar y mostrar variables de los objetos
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color){
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}
//Creando objeto, $nombre = new Nombre_clase();
$apple = new Fruit('Apple', 'Red');


//Haciendo uso de metodos publicos seria :

//$apple->set_name('Apple');
//$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>