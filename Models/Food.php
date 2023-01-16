<?php 

require_once __DIR__ . "/Product.php";

class Food extends Product {
    protected $type = "Alimentazione";
    protected $qty;
    protected $ingredient;

    function __construct($_name, $_brand, Category $_category, $_description, $_price, $_qty, $_ingredient){
        parent::__construct($_name, $this->type, $_brand, $_category, $_description, $_price);

        $this->setQty($_qty);
        $this->setIngredient($_ingredient);
    }
    

    /**
     * Get the value of qty
     */ 
    public function getQty(){
        return $this->qty;
    }

    /**
     * Set the value of qty
     *
     * @return  self
     */ 
    public function setQty($_qty)
    {
        $this->qty = $_qty;
        return $this;
    }

    /**
     * Get the value of ingredient
     */ 
    public function getIngredient(){
        return $this->ingredient;
    }

    /**
     * Set the value of ingredient
     *
     * @return  self
     */ 
    public function setIngredient($_ingredient){
        $this->ingredient = $_ingredient;
        return $this;
    }
}