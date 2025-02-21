<?php

require_once "Animal.php";
require_once "Cat.php";
require_once "Dog.php";
require_once "Horse.php";
require_once "Employee.php";


$eduardo = new Human("Eduardo", 20, "Guarapuava-PR", 11999632124);
$joao = new Human("João", 28, "Campinas", 11999457361);
$s1mple = new Human("S1mple", 28, "Ucrania", 343999457361);

$employee1 = new Employee("Lucas", 32, "Ponta-Grossa", 3212085498, "balconista");
$employee1->salaryEmployee();

$cat1 = new Cat($eduardo,"gordinho", "Vira-Lata", 4, "Cinza-Branco-Preto", 7.800, false);
$cat1->owner();
$cat1->skeletalSystem();

$dog1 = new Dog($joao, "hannibal", "Doberman", 4, "preto", 40.125, true);
$dog1->owner();
$dog1->isHunter();

$horse1 = new Horse($s1mple, "counter horse strike", "criolo", 4, "marrom", 200, true);
$horse1->owner();
$horse1->isWild();