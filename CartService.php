<?php

require "Product.php";
require "CartItem.php";
class CartService implements Cart{

    private array $items;

    public function addProduct(Product $product,$quantity){
        $index = $this->findProduct($product);
        if($index){
            $this->items[$index]->setQuantity($quantity);
        }
        else{
            
            $this->items[]= new CartItem($product,$quantity);
        }
    }
    public function removeProduct(Product $product){

        $index = $this->findProduct($product);
        if($index){

            unset($this->items[$index]);
        }

    }
    public function displayItems(){

        foreach ($this->items as $item){ 
            echo $item ."\n\n\n";
        }
    }

    public function findProduct(Product $product){
        foreach($this->items as $index=>$item){
            if($item->product->getId() == $product->getId()){
                return $index;
            }
        }
        return null;
    }


}