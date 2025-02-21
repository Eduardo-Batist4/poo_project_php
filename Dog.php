<?php

require_once "Human.php";

class Dog extends Animal {
    public Human $human;
    private bool $hunter;

    public function __construct(Human $human, string $name, string $raca, int $qtdLegs, string $color, float $weight, bool $hunter) {
        parent::__construct($name, $raca, $qtdLegs, $color, $weight);
        $this->human = $human;
        $this->hunter = $hunter;
    }

    public function speek () {
        echo "MIIIIAAAAUUUUUUUUUUUUUUU \n";
    }

    public function owner () {
        echo "---------------------------------- \n";
        echo "Nome: {$this->name} - Raça: {$this->raca} - {$this->color}  Dono: {$this->human->name} \n";
        echo "---------------------------------- \n";
    }

    public function isHunter () {
        if (!$this->hunter) {
            echo "O {$this->name} é um cachorro de caça. \n";
        } else {
            echo "O {$this->name} não é um cachorro de caça. \n";
        }
    }
}