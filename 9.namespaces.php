<?php 

/*Los namespaces en PHP se utilizan para organizar
y agrupar el código de manera que se eviten conflictos 
de nombres entre clases, funciones y constantes.*/
use Carpeta1\Humano;
use Carpeta2\Humano as Humano2; //Podemos hacer uso de alias con el keyword "as" y renombrar la clase aqui mismo

require_once('Carpeta1/Humano.php');
require_once('Carpeta2/Humano.php');

/* 

$humano1 = new Carpeta1\Humano; 

se puede hacer de esta forma tambien

*/
$humano1 = new Humano;
$humano1->saludar();


echo "<br>";

$humano2= new Humano2;
$humano2->saludar();

