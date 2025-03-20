<?php
/*Las interfaces, son ideales para 
definir un contrato que múltiples clases
deben seguir sin hacer uso de una herencia directa*/
Interface a {
public function prueba();
}

Interface b  {
    
    public function prueba2();
}

interface c extends a,b {

    public function prueba3();
}

/*Para implementar una interfaz 
Se tienen que incluir estrictamente todos los metodos que tenga
tanto los que defina como los que ha incluido previamente*/

//Para implementar una interfaz, el keyword a utilizar es "implements".
class d implements c {
    public function prueba(){
        
    }

    public function prueba2(){
        
    }

    public function prueba3(){
        
    }

}
