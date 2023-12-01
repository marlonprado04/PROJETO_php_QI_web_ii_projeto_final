<?php
class Item {
    private $id;
    private $imagem;
    private $nome;
    private $descricao;
    private $preco;

    // Construtor
    public function __construct($id, $imagem, $nome, $descricao, $preco) {
        $this->id = $id;
        $this->imagem = $imagem;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    // Métodos Getters e Setters
    public function getId() {
        return $this->id;
    }
    
    public function getImagem() {
        return $this->imagem;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }
}
