<?php 

/*Un método estático es un método que pertenece a la clase, no a las instancias de la clase
(en este caso a "Utilidades" no a los objetos de la misma ).
No pueden acceder a propiedades no estáticas ni a otros métodos no estáticos directamente.
*/
class Utilidades {
    public static function saludar() {
        return "Hola!";
    }
}
//Esto significa que puedes llamar a un método estático sin necesidad de crear una instancia de la clase.

echo Utilidades::saludar(); // Llamada directa sin instancia



/*----Cuando declaras un método estático, este no puede acceder a las propiedades no estáticas-----*/


class Ejemplo {
    public $valor = 10; // Propiedad no estática
    public static $valorEstatico = 20; // Propiedad estática

    public function mostrarValor() {
        return $this->valor; // Método no estático
    }

    public static function mostrarValorEstatico() {
        // return $this->valor; // Esto da error porque $this no existe en un contexto estático
        return self::$valorEstatico; // Esto es válido porque $valorEstatico es estática
    }
}

$objeto = new Ejemplo();
echo $objeto->mostrarValor(); // Esto funciona porque accede a una instancia
echo Ejemplo::mostrarValorEstatico(); // Esto funciona sin instancia

// Error: No puedes acceder a una propiedad no estática desde un método estático
// echo Ejemplo::mostrarValor(); // Provocará error
