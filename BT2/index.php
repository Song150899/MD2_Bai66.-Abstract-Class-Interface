<?php
include_once 'Shape.php';
include_once 'Rectangle.php';
include_once 'Square.php';


$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
echo 'Rectangle Color: ' . $rectangle->howToColor(). '<br />';
