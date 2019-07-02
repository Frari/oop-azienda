<?php
require_once "Persona.php";

class Dipendente extends Persona{
  private $codice;
  protected $sede_azienda;
  public $ruolo;
  // funzione per avere il valore della variabile protected
  function getSedeAzienda(){
    return $this->sede_azienda;
  }
  function setSedeAzienda($a){
    return $this->sede_azienda = $a;
  }
  // funzione per avere il valore della variabile privated solo all'interno di questa classe
  function getCodice(){
    return $this->codice;
  }
  function setCodice($a){
    return $this->codice = $a;
  }

//   function __construct($nome, $cognome, $codice);
//     parent::__construct($nome, $cognome);
//     $this->codice = $codice;
}

$dipendente2 = new Dipendente('Matteo', 'Fumagalli');
$dipendente2->setCodice('abc123');
$dipendente2->ruolo = 'impiegato';

var_dump($dipendente2);
 ?>
