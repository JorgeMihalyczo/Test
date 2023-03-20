<?php
    require_once("Product.php");

    class Disc extends Product {
        public $floatSize;

        function __construct(int $sku, string $name, float $price, float $size){
            parent::__construct($sku, $name, $price, $size);
            $this->floatSize = $size;
            }
        
        // GETTERS
        public function getSize():float {
            return $this->size;
        }


        public function getProductData(){
            $data = " 
                <div class=\"card text-bg-primary m-3\" >
                <div class=\"card-header\"> {$this->intSku} </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\"> {$this->strName} </h5>
                    <p class=\"card-text\"> {$this->floatPrice} €</p>
                    <p class=\"card-text\"> {$this->floatSize} MB</p>
                </div>
                </div>
                ";
            return $data;
        }


    }
?>