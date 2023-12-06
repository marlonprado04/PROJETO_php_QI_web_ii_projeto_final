<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Model;

class Comanda
{

  private $id;
  private $numeroComanda;

  function __construct($numeroComanda)
  {
    $this->numeroComanda = $numeroComanda;
  }

  public function __get($attribute)
  {
    return $this->$attribute;
  }

  public function __set($attribute, $value)
  {
    $this->$attribute = $value;
  }
}

?>