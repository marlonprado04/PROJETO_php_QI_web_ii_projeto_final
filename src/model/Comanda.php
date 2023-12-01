<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Model;

class Comanda
{

  private $id;
  private $numeroComanda;

  function __construct($id, $numeroComanda)
  {
    $this->id = $id;
    $this->numeroComanda = $numeroComanda;
  }

  public function __getId()
  {
    return $this->id;
  }

  public function __getNumeroComanda()
  {
    return $this->numeroComanda;
  }

  public function __setNumeroComanda($numeroComanda)
  {
    $this->numeroComanda= $numeroComanda;
  }

}

?>