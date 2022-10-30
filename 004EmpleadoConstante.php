<?php
/*: Copia la clase del ejercicio anterior y modifícala. Añade 
una constante SUELDO_TOPE con el valor del sueldo que debe pagar impuestos, y 
modifica el código para utilizar la constante.*/


class empleados{


    private   $numero=[];
    private const SUELDO_TOPE= 5000;

    

   
    public function __construct(    
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

    //geter y seter

    public function getNombreCompleto():string{

        return "el nombre es".$this->nombre ."y el apellido es".$this->apellidos;
       }

    public function debePagarImpuestos():bool{

        if ($this->sueldo<$this::SUELDO_TOPE) {
            //para llamar a una constante y metodos estaticos usamos al indio  ::
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
//creamos un trabajador y lo creamos dando la informacion
$trabajadorUno = new empleados("luisfer","parra");


$trabajadorUno ->anyadirTelefono(655443322);

$trabajadorDos = new empleados("dkglfh", "kjdsgj");

$trabajadorDos ->setSueldo(5000);
$trabajadorDos ->anyadirTelefono(655443323);
$trabajadorDos ->anyadirTelefono(6554433266);
$trabajadorDos ->anyadirTelefono(65544332343454);

echo $trabajadorDos->listarTelefonos();


?>