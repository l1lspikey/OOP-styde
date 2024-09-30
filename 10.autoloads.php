<?php 
/* Usamos la declaración 'use' para indicar  que vamos a utilizar la clase CourseController(tambien podemos asignarle un alias con el "as") del namespace Controllers*/
use Controllers\CourseController;
use Models\Course;

// Registramos una función de autoload
spl_autoload_register(function($clase){
    // Esta función se llama automáticamente cuando se intenta usar una clase que no ha sido cargada.
    
    
    //Variable para referirse al archivo
    $file = str_replace('\\', '/', $clase) . ".php";
    // Reemplazamos las barras invertidas por barras normales para construir la ruta del archivo
    
    //Mecanismo de validacion
    if  (file_exists($file)){
            
        require_once $file;   
    } else {

        //Manejar el error si el archivo no se encuentra
        echo "Archivo no encontrado: $file";

    }
    
}); 

$course= new Course;
$course->saludo();
?>