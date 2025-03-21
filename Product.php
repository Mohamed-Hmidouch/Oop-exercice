<?php 



class Product{

    
    private $id;
    private $name;
    private $price;

    public function __construct($id , $name,$price){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }

    public function __tostring(){
        return 'name:'.$this->name."\n price :".$this->price; 
    }


}