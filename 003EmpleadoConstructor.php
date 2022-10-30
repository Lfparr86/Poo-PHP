<?php

/*003EmpleadoConstructor.php: Copia la clase del ejercicio anterior y modifícala. 
Elimina los setters de nombre y apellidos, de manera que dichos datos se asignan 
mediante el constructor (utiliza la sintaxis de PHP8). Si el constructor recibe un tercer 
parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo 
inicial.*/

class empleados{


    private   $numero=[];
    

   
    public function __construct(   
         private string $nombre , 
         private string $apellidos ,
         private int $sueldo =1000)
    {
       /*esto es el constructor en php8 metemos las variable dentro del parentesis*/
    }

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

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    //como estan dentro del constructor podemos quitar los getter y setter.

    public function getNombreCompleto():string{

        return "el nombre es".$this->nombre ."y el apellido es".$this->apellidos;
       }


    public function debePagarImpuestos():bool{

        if ($this->sueldo<3333) {
            return false;
        }else{
            return true;
        }
        
    }    


    public function anyadirTelefono(int $telefono) : void{

     array_push($this->numero, $telefono);        

    }


    public function listarTelefonos():string{

        $resultado = implode(",", $this->numero);
        return $resultado;
    }





}
/*creamos un trabajador y lo creamos dando la informacion pero esta vez sin el setearla como las anteriores
pasamos el nombre y apellidos que no estan iniciadas el sueldo lo tenemos iniciado y no lo pasamos*/
$trabajadorUno = new empleados("luisfer","parra");

//llamamos a la funcion añadir numero pasando un numero
$trabajadorUno ->anyadirTelefono(655443322);

$trabajadorDos = new empleados("dkglfh", "kjdsgj");
//en este caso seteamos nosotros el sueldo no usamso en valor base de los 1000 como en el anterior
$trabajadorDos ->setSueldo(5000);
$trabajadorDos ->anyadirTelefono(655443323);
$trabajadorDos ->anyadirTelefono(6554433266);
$trabajadorDos ->anyadirTelefono(65544332343454);

echo $trabajadorDos->listarTelefonos();


?>