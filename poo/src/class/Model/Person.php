<?php

namespace Poo\Model;
use Poo\Model\Animal;

/**
 * test
 */
class Person
{
    private $name;
    private $age;
    private $gender;
    private $animal;

    public function __construct($name, $age, $gender, $animalName)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->animal = new Animal($animalName);
    }
}