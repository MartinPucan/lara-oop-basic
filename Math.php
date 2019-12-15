<?php

abstract class Shape {
    protected $color;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract protected function getArea();
}

class Square extends Shape {
    protected $lenght = 4;

    public function getArea()
    {
        return pow($this->lenght,2);
    }
}

class Triangle extends Shape {
    protected $base = 4;

    protected $height = 7;

    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}

class Circle extends Shape {

}

//echo (new Circle('green'))->getArea();
echo (new Square())->getArea();