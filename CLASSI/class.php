<?php

class Mercato {
    private $nome;
    private $tipologia;
    private $prezzo;
    public function __construct($nome, $tipologia, $prezzo) {
        $this->nome = $nome;
        $this->tipologia = $tipologia;
        $this->prezzo = $prezzo;
    }

    public function getData() {
        return [
            "nome" => $this->nome,
            "tipo" => $this->tipologia,
            "prezzo" => $this->prezzo
        ];
    }
}