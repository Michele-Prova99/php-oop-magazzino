<?php

class Phones {

  public $modello;
  public $brand;
  public $colore;
  public $disponibilità;
  public $prezzo;


  public function __construct($_colore, $_disponibilità, $_prezzo) {

  $this->colore = $_colore;

  $this->disponibilità = $_disponibilità;

  $this->prezzo = $_prezzo;

  }


  // public function setModello($_modello) {
  //   $this->modello = $_modello;
  // }
  //
  //
  // public function getModello() {
  //
  //   if(empty($this->modello)) {
  //     die("Non hai inserito il modello");
  //   }
  //   return $this->modello;
  // }

}

?>
