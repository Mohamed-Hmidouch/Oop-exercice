<?php

require "Product.php";

class CartItem 
{
     private Product $product;
     private $quantity;


     public function setQuantity($quantity){
        $this->quantity = $quantity;
     }
    public function displayItem(){
        echo $this->product;
        echo "\n quantity :".$this->quantity;
    }
}