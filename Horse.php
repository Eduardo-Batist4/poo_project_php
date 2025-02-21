<?php

require_once "Human.php";

class Horse extends Animal {
    public Human $human;
    private bool $wild;

    public function __construct(Human $human, string $name, string $raca, int $qtdLegs, string $color, float $weight, bool $wild) {
        parent::__construct($name, $raca, $qtdLegs, $color, $weight);
        $this->human = $human;
        $this->wild = $wild;
    }

    public function speek () {
        echo "iiiiiiiiiiRÃÃÃÃ RÃÃÃ  RRRÃÃÃÃÃ \n";
    }

    public function owner () {
        echo "---------------------------------- \n";
        echo "Nome: {$this->name} - Raça: {$this->raca} - {$this->color}  Dono: {$this->human->name} \n";
        echo "---------------------------------- \n";
    }

    public function isWild () {
        if ($this->wild) {
            echo "O {$this->name} é um cavalo selvagem. \n";
        } else {
            echo "O {$this->name} não é um cavalo selvagem. \n";
        }
    }
}