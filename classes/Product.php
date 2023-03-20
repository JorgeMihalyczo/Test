<?php
    declare(strict_types=1);
    
    abstract class Product{
        public $intSku;
        public $strName;
        public $floatPrice;


        function __construct(int $sku, string $name, float $price){
            $this->intSku = $sku;
            $this->strName = $name;
            $this->floatPrice = $price;
        }

        abstract public function getProductData();
        
    }

?>