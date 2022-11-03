<?php


/*002EmpleadoTelefonos.php: Copia la clase del ejercicio anterior y modifícala. Añade 
una propiedad privada que almacene un array de números de teléfonos. Añade los 
siguientes métodos:
public function anyadirTelefono(int $telefono) : void → Añade un teléfono al array
public function listarTelefonos(): string → Muestra los teléfonos separados por comas
public function vaciarTelefonos(): void → Elimina todos los teléfonos*/

class Empleado{//clase
    private string $nombre;
    private string $apellidos;
    private int $sueldo;
    private   $numero=[];
    

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

    //getter y setter

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
        //con esta funcion le estamos pasando un numero que se lo pasamos en el objeto

     array_push($this->numero, $telefono);        
        //con push es para meterlo en el array,ponemos el nombre de la array y el $telefono que es la variable
    }


    public function listarTelefonos():string{
        //el implode es para pasar una array a string primer parametro como queremos dividir y luego la array
        $resultado = implode(",", $this->numero);
        return $resultado;
    }
}
//creamos un trabajador y lo creamos dando la informacion
$trabajadorUno = new Empleado();
$trabajadorUno ->setNombre("Luis Fernando");
$trabajadorUno ->setApellidos("Parra");
$trabajadorUno ->setSueldo(5000);
$trabajadorUno ->anyadirTelefono(655443322);

$trabajadorDos = new Empleado();
$trabajadorDos ->setNombre("Luis Fernando");
$trabajadorDos ->setApellidos("Parra");
$trabajadorDos ->setSueldo(5000);
$trabajadorDos ->anyadirTelefono(655443323);
$trabajadorDos ->anyadirTelefono(6554433266);
$trabajadorDos ->anyadirTelefono(65544332343454);

echo $trabajadorDos->listarTelefonos();




?>