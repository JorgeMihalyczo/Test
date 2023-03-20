<?php
        require_once("Product.php");

    class Book extends Product {
        public $floatWeight;


        function __construct(int $sku, string $name, float $price, float $weight){
            parent::__construct($sku, $name, $price, $weight);
            $this->floatWeight = $weight;
        }

        public function getProductData(){
            $data = " 
                <div class=\"card text-bg-primary m-3\" >
                <div class=\"card-header\"> {$this->intSku} </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\"> {$this->strName} </h5>
                    <p class=\"card-text\"> {$this->floatPrice} €</p>
                    <p class=\"card-text\"> {$this->floatWeight} KG</p>
                </div>
                </div>
                ";
            return $data;
        }
    }  


?>