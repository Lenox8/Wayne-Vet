<?php

class Especie {
    private $id;
    private $nome;

    public function __construct($id = null, $nome = null) {
        $this->id = $id;
        $this->nome = $nome;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}