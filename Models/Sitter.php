<?php
include_once __DIR__. '/Product.php';

class Sitter extends Product {
    public
    $sizing;
    public function __construct($nome, $descrizione, $immagine, $prezzo, $category,$sizing){
        parent::__construct($nome, $descrizione, $immagine, $prezzo,$category );
        $this-> sizing = $sizing;   
    } 
} 

