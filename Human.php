<?php

class Human {
    public string $name;
    public int $age;
    public string $address;
    public int $phone;

    public function __construct(string $name, int $age, string $address, int $phone) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->phone = $phone;
    }

};