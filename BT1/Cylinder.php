<?php
include_once 'Circle.php';

class Cylinder extends Circle
{
    public int $height;

    #[Pure] public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    #[Pure] public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    #[Pure] public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
}