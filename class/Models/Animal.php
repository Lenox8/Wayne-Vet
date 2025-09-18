<?php

class Animal {
    private $codigo;
    private $nome;
    private $especie;

    public function __construct($codigo = null, $nome = null, Especie $especie = null) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->especie = $especie ?? new Especie();
    }

    // Getters
    public function getCodigo() {
        return $this->codigo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEspecie() {
        return $this->especie;
    }

    // Setters
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEspecie(Especie $especie) {
        $this->especie = $especie;
    }
}