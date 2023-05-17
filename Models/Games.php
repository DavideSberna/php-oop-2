<?php
include_once __DIR__. '/Product.php';

class Games extends Product {
    public
    $productType;
    public function __construct($nome, $descrizione, $immagine, $prezzo,$category, $productType){
        parent::__construct($nome, $descrizione, $immagine, $prezzo,$category);
        $this->productType = $productType;    
    }
}


 


