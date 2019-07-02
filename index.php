<!-- modellizzare la gerarchia di classi per rappresentare i dipendenti di un'azienda -->
<?php
require_once "Persona.php";
require_once "Dipendente.php";

echo '<pre>';

$persona1 = new Persona('Luigi', 'Bianchi');
$persona1->eta = 33;
$persona1->setSesso("maschio");

var_dump($persona1);

$dipendente1 = new Dipendente('Mario', 'Rossi');
$dipendente1->setSedeAzienda("Vienna");
$dipendente1->ruolo = "Web developer";
var_dump($dipendente1);

echo '</pre>';
 ?>
