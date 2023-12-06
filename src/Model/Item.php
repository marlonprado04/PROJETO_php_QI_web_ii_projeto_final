<?php

// Definindo namespace
namespace Marlon\QiWebIiProjetoFinal\Model;

class Item {
    private $id;
    private $nome;
    private $preco;
    private $descricao;
    private $imagem;

    // Criando construtor
    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    // Métodos Getters e Setters
    public function __getId() {
        return $this->id;
    }
    
    public function __getImagem() {
        return $this->imagem;
    }

    public function __setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public function __getNome() {
        return $this->nome;
    }

    public function __setNome($nome) {
        $this->nome = $nome;
    }

    public function __getDescricao() {
        return $this->descricao;
    }

    public function __setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function __getPreco() {
        return $this->preco;
    }

    public function __setPreco($preco) {
        $this->preco = $preco;
    }
}
