<?php



class Goodbye {

    // Constantes de clase (son utiles para definir valores continuos dentro de una clase)
    // Se hace uso del keyword "const" seguido del nombre de la constante para declararla
    /*Las constantes de clase distinguen entre mayúsculas y minúsculas.
     Aunque se recomienda nombrar las constantes con todas las letras mayúsculas.*/   

    const LEAVING_MESSAGE = "Thank you for visiting here!";
    const ADIOS_PVU = "ADIOS PARA SIEMPRE!";
  
  public function byebye() {
    echo self::ADIOS_PVU . "<br>";//Classs constants can be called by "self" keyword within a class

  }


}

$goodbye = new Goodbye();

$goodbye->byebye();//Ok. Funciona el keyword "self"
echo Goodbye::ADIOS_PVU . "<br>";// Ok. Se puede hacer uso de igual manera por fuera
echo Goodbye::LEAVING_MESSAGE; // solo necesitas "Goodbye" operador de resolucion "::" y nombre de la constante "LEAVING_MESSAGE" 
?>
