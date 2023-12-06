<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Model;

class Item
{
    private $id;
    private $nome;
    private $preco;
    private $descricao;
    private $imagem;

    // Criando construtor
    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
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
