<?php

class Circle extends Shape
{
    public $radius;

    #[Pure] public function __construct( $name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    #[Pure] public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    #[Pure] public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
}