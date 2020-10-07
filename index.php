<?php

require_once 'classes/Phones.php';

require_once 'classes/SmartPhones.php';

$motorola = new Phones('nero','si','50');
var_dump($motorola);

$iphone = new SmartPhones('bianco','no','1000','si','si','512gb');
var_dump($iphone);

// $motorola->setModello();
// echo $motorola->getModello();
//
// $iphone->setModello();
// echo $iphone->getModello();

?>
