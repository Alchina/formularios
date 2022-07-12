<?php
class CRectángulo{
  private $Larg,$ancho,$Perí,$Ar;

    public function inicializar($l,$a){
     $this->largo = $l;
        $this->ancho = $a;
    }

    public function CalcularPerímetro(){
      $CalcularPerímetro =  $this->largo + $this->ancho + $this->largo + $this->ancho ;
      echo "El perímetro es: $CalcularPerímetro";
      echo '<br>';
    }

    public function CalcularArea(){
        $CalcularArea = $this->largo  *$this->ancho ;
        echo "EL Area es: $CalcularArea"  ;
        echo '<br>';
    }

 
    public function mostrarDatos(){
        echo 'Largo: ' ;
        echo $this->largo;
        echo '<br>';
        echo 'Ancho: ' ;
        echo $this->ancho;
        echo '<br>';
    }

  
}

$Larg=$_POST['n1'];
$ancho=$_POST['n2'];
$per1=new CRectángulo();
$per1->inicializar($Larg, $ancho);
$per1->mostrarDatos();
$per1->CalcularArea();
$per1->CalcularPerímetro();
?>