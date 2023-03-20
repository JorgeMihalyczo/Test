<?php
    require_once("Product.php");
    class Furniture extends Product {
        public $floatHeight;
        public $floatWidth;
        public $floatLength;
        
        function __construct(int $sku, string $name, float $price, float $height, float $width, float $length){
            parent::__construct($sku, $name, $price);
            $this->floatHeight = $height;
            $this->floatWidth = $width;
            $this->floatLength = $length;
        }

        public function getProductData(){
            $data = " 
                <div class=\"card text-bg-primary m-3\" >
                <div class=\"card-header\"> {$this->intSku} </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\"> {$this->strName} </h5>
                    <p class=\"card-text\"> {$this->floatPrice} €</p>
                    <p class=\"card-text\"> Dimension: {$this->floatHeight} X {$this->floatWidth} X {$this->floatLength}</p>
                </div>
                </div>
                ";
            return $data;
        }
    }

?>