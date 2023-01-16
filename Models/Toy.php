<?php 

require_once __DIR__ . "/Product.php";

class Toy extends Product {
    protected $type = "Giochi";
    protected $size;
    protected $material;

    function __construct($_name, $_brand, Category $_category, $_description, $_price, $_size, $_material){
        parent::__construct($_name, $this->type, $_brand, $_category, $_description, $_price);

        $this->setMaterial($_material);
        $this->setSize($_size);
    }

    /**
     * Get the value of size
     */ 
    public function getSize(){
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($_size){
        $this->size = $_size;
        return $this;
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial(){
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($_material){
        $this->material = $_material;
        return $this;
    }
}