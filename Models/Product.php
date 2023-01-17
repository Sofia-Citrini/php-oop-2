<?php

require_once __DIR__ . "/Category.php";

/**
 * @param string $_name 
 * @param string $_type
 * @param string $_brand
 * @param Category $_category
 * @param string $_description
 * @param float $_price
 */
class Product {
    private $id;
    protected $name;
    protected $type;
    protected $brand;
    protected $category;
    protected $description;
    protected $price;
    
    function __construct($_name, $type, $_brand, Category $_category, $_price, $_description = null){
        $this->setName($_name);
        $this->setBrand($_brand);
        $this->setCategory($_category);
        $this->setDescription($_description);
        $this->setPrice($_price);

        $this->setId();
    }

    /**
     * Get the value of name
     */ 
    public function getId(){
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    private function setId(){
        $this->id = uniqid("prod-");
        return $this;
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
        if(is_null($_description)){
            return;
        }

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

    public function printCard($product){
        ?>

            <div class="card bg-light" style="height: 26rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->getName() ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $product->getBrand() ?></h6>
                    <p class="card-text"><?php echo $product->getDescription() ?></p>
                    <div class="py-3 <?php echo (method_exists($product, "getIngredient") ? 'd-block' : 'd-none') ?>">
                        <h6 class="mb-0">Inredienti:</h6>
                        <?php echo (method_exists($product, "getIngredient") ? implode("<br>", $product->getIngredient()) : '') ?>
                    </div>
                    <div class="py-3 <?php echo (method_exists($product, "getQty") ? 'd-block' : 'd-none') ?>">
                        <h6 class="mb-0">Quantità:</h6>
                        <?php echo (method_exists($product, "getQty") ? $product->getQty() : '') ?>
                    </div>
                    <div class="py-3 <?php echo (method_exists($product, "getMaterial") ? 'd-block' : 'd-none') ?>">
                        <h6 class="mb-0">Materiali:</h6>
                        <?php echo (method_exists($product, "getMaterial") ? implode("<br>", $product->getMaterial()) : '') ?>
                    </div>
                    <div class="bg-danger d-inline-block rounded-pill p-2 px-4">
                        <h6 class="m-0 text-white"><?php echo $product->getPrice() ?></h6> 
                    </div>
                </div>
            </div>

        <?php
    }

}
