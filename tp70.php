<?php
class Persona {
  private $Nom,$Hrs,$Suel;



  public function inicializar($n, $h, $s){
  $this->nombre=$n;
  $this->horas=$h;
  $this->sueldo=$s;
  }

  public function mostrarDatos(){
    echo 'Nombre: ' ;
   echo $this->nombre;
   

  }
  public function multiplicar(){
  $multiplicar = $this->horas * $this->sueldo;
  echo "El sueldo total es: $$multiplicar";
  }
  
}

$Nom=$_POST['n1'];
$Hrs=$_POST['n2'];
$Suel=$_POST['n3'];
$per1=new Persona();
$per1->inicializar($Nom, $Hrs, $Suel);
$per1->mostrarDatos();
$per1->multiplicar();
?>