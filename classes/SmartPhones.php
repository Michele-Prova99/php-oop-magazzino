<?php

require_once 'Phones.php';

class SmartPhones extends Phones {

  public $touchScreen;
  public $internetConnection;
  public $memoria;

  public function __construct($_colore, $_disponibilità, $_prezzo, $_touchScreen, $_internetConnection, $_memoria) {

    parent::__construct($_colore, $_disponibilità, $_prezzo);

    $this->touchScreen = $_touchScreen;

    $this->internetConnection = $_internetConnection;

    $this->memoria = $_memoria;

  }

}

?>
