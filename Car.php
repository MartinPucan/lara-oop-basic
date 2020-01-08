<?php

class Car {

    public $isCompleted;

    public $name;

    public $manufacturer;

    public function __construct($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function isCompleted($isCompleted)
    {
        $this->isCompleted = $isCompleted;

        return $this;
    }

    public function getName($name)
    {
        $this->name = $name;

        return $this;
    }
}

$vehicle2 = (new Car())
    ->isCompleted(false)
    ->getName('Audi');

var_dump($vehicle2);
