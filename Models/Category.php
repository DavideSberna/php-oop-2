<?php
class Category {
    public $nome, $icon, $sottocategorie = [];

    public function __construct($nome, $icon) {
        $this->nome = $nome;
        $this->icon = $icon;
    }

    public function subCategory($sottocategoria) {
        $this->sottocategorie[] = $sottocategoria;
    }

    public function getIcon() {
        if ($this->nome === 'Cani') {
            return 'fa-solid fa-dog';
        } else{
            return 'fa-solid fa-cat';
        }
    }
}





 