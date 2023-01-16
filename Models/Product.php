<?php

require_once __DIR__ . "/Category.php";
class Product {
    protected $name;
    protected $type;
    protected $brand;
    protected $category;
    protected $description;
    protected $price;
    
    function __construct($_name, $type, $_brand, Category $_category, $_description, $_price){
        $this->setName($_name);
        $this->setBrand($_brand);
        $this->setCategory($_category);
        $this->setDescription($_description);
        $this->setPrice($_price);
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
     * Get the value of type
     */ 
    public function getType(){
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($_type){
        $this->type = $_type;
        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand(){
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($_brand){
        $this->brand = $_brand;
        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory(){
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($_category){
        $this->category = $_category;
        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription(){
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($_description){
        $this->description = $_description;
        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice(){
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($_price){
        $this->price = $_price ."€";
        return $this;
    }
}