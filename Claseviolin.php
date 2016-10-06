<?php
/**
 * Clase creada por Roberto Jesús Sánchez Camacho
 * clase ejemplo de definicion
 */
class ClaseViolin
{

  // Declaración de una propiedad
  public $color = 'marron';
  public $tamanyo = "4/4";
  public $precio = 1000;
  public $tensores = 1;

  // Setters
  public function setcolor($cambiarColor){
    $this->color = $cambiarcolor;
  }

  public function setTamanyo($CambiarTamanyo){
    $this->tamaño = $CambiarTamanyo;
  }

  public function setPrecio($CambiarPrecio){
    $this->Precio =$CambiarPrecio;
  }

  public function setTensores($CambiarTensores){
    $this->Precio =$CambiarTensores;
  }

  //Getters
  public function getColor() {
    echo $this->color;
      return $this->color;
  }
  public function getTamanyo() {
    echo $this->tamanyo;
      return $this->tamanyo;
  }
  public function getPrecio() {
      return $this->precio;
  }
  public function getTensores() {
      return $this->tensores;
  }

}

?>
