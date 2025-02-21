<?php

class Product {
    public int $id;
    public string $name;
    public int $price;
    public int $quantityStock;

    public function __construct($id, $name, $price, $quantityStock) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantityStock = $quantityStock;
    }

    public function reduceStock($quantity) {
        if($this->quantityStock >= $quantity) {
            $this->quantityStock -= $quantity;
            return true;
        } else {
            return false;
        }
    }

    public function getProduct () {
        echo "--------------------------------\n";
        echo "Nome: {$this->name} - Quantidade: $this->quantityStock  \n";
        echo "--------------------------------\n";
    }
}