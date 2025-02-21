<?php

require_once "Product.php";
require_once "Human.php";

class Sales {
    public Human $human;
    public Product $product;
    public array $listProducts = [];
    public int $quantity;

    public function buyItem (Product $product, $human, $quantity) {
        
        if($product->reduceStock($quantity)) {
            $this->listProducts[] = [
                "id" => $product->id,
                "product" => $product->name,
                "price" => $product->price,
                "buyer" => $human->name,
                "quantity" => $quantity
            ];
        } else {
            echo "Compra Cancelada! Produto em falta. \n";
        }
    }

    public function getSales () {
        if (empty($this->listProducts)) {
            echo "Nenhuma venda foi feita! \n";
        } else {
            print_r($this->listProducts);
            echo "\n";
        }
    }
}