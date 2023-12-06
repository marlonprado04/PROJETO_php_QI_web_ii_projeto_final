<?php

namespace Marlon\QiWebIiProjetoFinal\Model;

class ItemComanda
{
  private $id;
  private $id_item;
  private $id_comanda;
  private $quantidade;
  private $preco_total;
  private $observacao;

  public function __construct($id_item, $id_comanda, $quantidade, $preco_total, $observacao)
  {
    $this->id_item = $id_item;
    $this->id_comanda = $id_comanda;
    $this->quantidade = $quantidade;
    $this->preco_total = $preco_total;
    $this->observacao = $observacao;
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