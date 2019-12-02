<?php

class Shape {

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

echo (new Circle())->getArea();