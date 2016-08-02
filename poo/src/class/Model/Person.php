<?php

namespace Model;

/**
 * test
 */
class Person
{
    private $name;
    private $age;
    private $gender;

    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
}