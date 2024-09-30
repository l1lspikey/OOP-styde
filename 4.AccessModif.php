<?php
class Fruit {
  public $name;    // Propiedad pública: accesible desde cualquier lugar
  public $color;   // Propiedad pública
  public $weight;  // Propiedad pública

  // Método público para establecer el nombre
  function set_name($n) {
    $this->name = $n;
  }

  // Método protegido para establecer el color
  protected function set_color($n) {
    $this->color = $n;
  }

  // Método privado para establecer el peso
  private function set_weight($n) {
    $this->weight = $n;
  }

  // Método público que puede utilizar métodos protegidos y privados
  public function initialize($name, $color, $weight) {
    $this->set_name($name);          // Llamada al método público
    $this->set_color($color);        // Llamada al método protegido
    $this->set_weight($weight);      // Llamada al método privado
  }

  // Método para mostrar las propiedades (opcional)
  public function display() {
    return "Name: $this->name, Color: $this->color, Weight: $this->weight";
  }
}

$mango = new Fruit();// Prueba sin argumentos para probar constructores y demas metodos 
$mango->set_name('Mango'); 
// $mango->set_color('Yellow'); // Error : Como es protegido no es accesible desde afuera
// $mango->set_weight('300'); // Error: Como es privado no es accesible desde afuera

/*Private Se utiliza cuando deseas encapsular completamente la funcionalidad 
y no permitir que las subclases accedan a estos elementos.*/

/* Protected Se utiliza cuando quieres permitir que las subclases
 accedan a ciertas propiedades o métodos */

// Usando el método público para inicializar
$mango->initialize('Mango', 'Yellow', 300);
echo $mango->display(); // Muestra las propiedades
?>