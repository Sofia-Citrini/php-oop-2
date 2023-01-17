<?php

class Category {
    protected $name;
    protected $icon = "fa-paw";

    function __construct($_name, $_icon = null) {
        $this->setName($_name);
        $this->setIcon($_icon);
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

    /**
     * Get the value of name
     */ 
    public function getIcon(){
        return $this->icon;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setIcon($_icon){
        if (empty($_icon)){
            return;
        }

        $this->icon = $_icon;
        return $this;
    }

    public function getIconHTML(){
        return '<i class="fa-solid $this->icon"></i>';
    }
}