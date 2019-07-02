<!-- modellizzare la gerarchia di classi per rappresentare i dipendenti di un'azienda -->
<?php
require "Persona.php";

$persona1 = new Persona('Luigi', 'Bianchi');
$persona1->eta = 33;
$persona1->setSesso("maschio");

var_dump($persona1);
 ?>
