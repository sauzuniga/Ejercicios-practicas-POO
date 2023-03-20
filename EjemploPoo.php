<?php
class Mascota{
public $nombre;
public $especie;
private $edad;
Private $sexo;
public function setModelo($value){
    $this->edad=$value;
}
public function getEdad(){
    return $this->edad;
}
public function __construct($_sexo){
    $this->sexo=$_sexo;

}
public function getSexo(){
    return $this->sexo;
}

}

$mascotas=new Mascota("Macho");
$mascotas->setModelo(5);
$mascotas->nombre="Adelin";
echo $mascotas->nombre;
echo"<br>";
$mascotas->especie="Perro";
echo $mascotas->especie;
echo"<br>";
echo $mascotas->getEdad();
echo"<br>";
echo $mascotas->getSexo();

?>