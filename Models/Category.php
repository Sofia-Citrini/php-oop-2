<?php

class Category {
    private string $name;
    private $icon;

    function __construct($_name) {
        $this->setName($_name);
    }

    /**
     * Get the value of name
     */ 
    public function getName(){
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($_name){
        $this->name = $_name;
        return $this;
    }
}