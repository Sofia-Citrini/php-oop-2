<?php 

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Kennel extends Product {
    protected $type = "Cucce e Trasportini";

    function __construct($_name, $_brand, Category $_category, $_description, $_price){
        parent::__construct($_name, $this->type, $_brand, $_category, $_description, $_price);

    }
}