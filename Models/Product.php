<?php

include_once __DIR__.'/../Models/Category.php';
include_once __DIR__.'/../Models/Food.php';
include_once __DIR__.'/../Models/Games.php';
include_once __DIR__.'/../Models/Sitter.php';

class Product {
    public
    $nome, $descrizione, $immagine, $prezzo, $category;
    

    public function __construct($nome,$descrizione,$immagine,$prezzo, Category $category){
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->immagine = $immagine;
        $this->prezzo = $prezzo;
        $this->category = $category;
    }
}