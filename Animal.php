<?php

class Animal {
    public string $name;
    public string $raca;
    public int $qtdLegs;
    public string $color;
    public float $weight;

    public function __construct($name, $raca, $qtdLegs, $color, $weight) {
        $this->name = $name;
        $this->raca = $raca;
        $this->qtdLegs = $qtdLegs;
        $this->color = $color;
        $this->weight = $weight;
    }
 
    public function speek () {
        echo "Olá! \n";
    }
}
