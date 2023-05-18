<?php
include_once __DIR__. '/Product.php';
include_once __DIR__ . '/../Traits/Sizing.php';

class Sitter extends Product {
    use Sizing;

    public function __construct($nome, $descrizione, $immagine, $prezzo, $category){
        parent::__construct($nome, $descrizione, $immagine, $prezzo,$category );
  
    } 
} 

