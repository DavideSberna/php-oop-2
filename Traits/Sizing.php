<?php

trait Sizing{
    protected
    $size;

    public function getSize(){
        if($this->size){
            return $this->size;
        } else{
            return 'Non impostato';

        }
    }
    public function setSize($size){
        if(empty($size)){
            throw new Exception('Seleziona campo');
        }
            $this->size = $size;
        

    }
}