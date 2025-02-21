<?php

class Employee extends Human {
    private string $position;

    public function __construct(string $name, int $age, string $address, int $phone, string $position) {
        parent::__construct($name, $age, $address, $phone);
        $this->position = $position;
    }

    public function salaryEmployee () {
        if($this->position == "balconista") {
            echo "O salário do {$this->name} ({$this->position}) é R$:2300,00 \n";
        } else if ($this->position == "veterinario") {
            echo "O salário do {$this->name} ({$this->position}) é R$:4850,00 \n";
        } else if ($this->position == "vendedor") {
            echo "O salário do {$this->name} ({$this->position}) é R$:3700,00 \n";
        } else {
            echo "Não existe salário para esse cargo! \n";
        }
    }
}

