<?php

/*001Empleado.php: Crea una clase Empleado con su nombre, apellidos y sueldo. 
Encapsula las propiedades mediante getters/setters y añade métodos para:
Obtener su nombre completo → getNombreCompleto(): string
Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando 
el sueldo es superior a 3333€) → debePagarImpuestos(): bool*/

class Empleado{//clase
    private string $nombre;
    private string $apellidos;
    private int $sueldo;
    //variables
 
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

  
    public function getApellidos()
    {
        return $this->apellidos;
    }


    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

   
     public function getSueldo()
     {
          return $this->sueldo;
     }

 
     public function setSueldo($sueldo)
     {
          $this->sueldo = $sueldo;

          return $this;
     }

     //getter y setter
     
     public function getNombreCompleto():string{//creas la funcion y con los : le indica lo que se devuelve

        return "el nombre es".$this->nombre ."y el apellido es".$this->apellidos;
       }//funcion da nombre  y apellido  para llamar con el this->

    public function debePagarImpuestos():bool{

        if ($this->sueldo<3333) {
            return false;
        }else{
            return true;
        }
        
    }
}
//creamos un trabajador y lo creamos dando la informacion el objeto asignamos con ->
$trabajadorUno = new Empleado();
$trabajadorUno ->setNombre("Luis Fernando");
$trabajadorUno ->setApellidos("Parra");
$trabajadorUno ->setSueldo(5000);

echo $trabajadorUno->getNombreCompleto();
echo $trabajadorUno->debePagarImpuestos();
?>