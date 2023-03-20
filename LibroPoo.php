<?php
class Libro{
public $autor;
public $titulo;
private $precio;
public $stock;
public $id;
public function setPrecio($value){
    $this->precio=$value;
}
public function getPrecio(){
    return $this->precio;

}
}
 $libro=new Libro();   
 $libro->autor="Brandom Sanderson";
echo $libro->autor;
echo "<br>";
$libro->titulo="Mistborne";
echo $libro->titulo;
$libro->setPrecio(34.65);
echo "<br>";
echo $libro->getPrecio();
echo "<br>";
$libro->stock="8";
echo $libro->stock;
echo "<br>";
$libro->id="ad43566";
echo $libro->id;
?>