<?php
class Persona{
  public $nome;
  public $cognome;
  public $eta;
  protected $sesso;

  function __construct($nome, $cognome){
    $this->nome = $nome;
    $this->cognome = $cognome;
  }

  function getSesso(){
    return $this->sesso;
  }

  function setSesso($s){
    return $this->sesso = ($s);
  }
}
 ?>
