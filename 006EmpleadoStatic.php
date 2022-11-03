<?php

/*006Empleadotatic.php: Copia la clase del ejercicio anterior y modifícala. Completa el 
siguiente método con una cadena HTML que muestre los datos de un empleado 
dentro de un párrafo y todos los teléfonos mediante una lista ordenada (para ello, 
deberás crear un getter para los teléfonos):

public static function toHtml(Empleado $emp): string */


class Empleado{ //TODO: Renombrar las clases con Mayus y usarlas en la llamada como tal.

    private   $numero=[];
    private static $sueldotope = 5000;
    //como tenemos un static tenemos que usar al indio  para el getter y setter::
    
 
    public function __construct( //tenemos el constructor de php8   
        private string $nombre , 
        private string $apellidos ,
        private int $sueldo =1000)
    {
       
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

    public function getsuelTope(){

        return self :: $sueldotope;//estamso devolviendo sueldotope
    }

    public function setsuedoTope($sueldotope){

        self::$sueldotope =$sueldotope;
        return $sueldotope; 

    }



    //getter y seter

    

    public function getNombreCompleto():string{

        return "el nombre es".$this->nombre ."y el apellido es".$this->apellidos;
       }

    public function debePagarImpuestos():bool{
        /* TODO: si la constante está definida en mayúsculas se llama así,
        pero es que no tienes ni la constante definida con ese nombre, por eso te da fallo.*/
        if ($this->sueldo<$this::$sueldotope) {
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

    public static function toHtml(Empleado $emp): string{

        $resultado ="<ol>";
        $resultado = $emp ->getNombreCompleto();
        for ($i=0; $i <count($emp->numero) ; $i++) { 
            $resultado =$resultado . "<li>".$emp->numero[$i]."</li>";
        }
        $resultado+="</ol>";

        return $resultado;
         

    }



}
//creamos un trabajador y lo creamos dando la informacion
$trabajadorUno = new Empleado("luisfer","parra");


$trabajadorUno ->anyadirTelefono(655443322);

$trabajadorDos = new Empleado("dkglfh", "kjdsgj");

$trabajadorDos ->setSueldo(5000);
$trabajadorDos ->anyadirTelefono(655443323);
$trabajadorDos ->anyadirTelefono(6554433266);
$trabajadorDos ->anyadirTelefono(65544332343454);
 
echo Empleado::toHtml($trabajadorDos);



?>