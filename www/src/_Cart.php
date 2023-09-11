<?php

namespace App;

class Cart
{
    public $cart = array();

    function __construct(){

    }

    public function add(string $name, float $price, int $quantity){
         $this->cart[] = [
            "name" => $name,
            "price" => $price,
            "quantity"=>$quantity
        ];
    }

    public function getProducts(){
        return $this->cart;
    }

}