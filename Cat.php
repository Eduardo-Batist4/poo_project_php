<?php

require_once "Human.php";

class Cat extends Animal {
    public Human $human;
    private bool $clavicles;

    public function __construct(Human $human, string $name, string $raca, int $qtdLegs, string $color, float $weight, bool $clavicles) {
        parent::__construct($name, $raca, $qtdLegs, $color, $weight);
        $this->human = $human;
        $this->clavicles = $clavicles;
    }

    public function speek () {
        echo "MIIIIAAAAUUUUUUUUUUUUUUU \n";
    }

    public function owner () {
        echo "---------------------------------- \n";
        echo "Nome: {$this->name} - Raça: {$this->raca} - {$this->color}  Dono: {$this->human->name} \n";
        echo "---------------------------------- \n";
    }

    public function skeletalSystem () {
        if (!$this->clavicles) {
            echo "Sistema esquelético Não têm clavículas, Têm uma espinha dorsal flexível com 30 vértebras, Caem sempre de pé. \n";
        } else {
            echo "Esse gato é um ET. \n";
        }
    }
}
