<?php
include_once "Tiger.php";
include_once "Chicken.php";
include_once "Apple.php";
include_once "Orange.php";
$tiger= new Tiger();
$chicken = new Chicken();
echo $tiger->makeSound() . "</br>";
echo $chicken->makeSound(). " ";

echo $chicken->eat()."  ";

echo ("------Fruits<br/>");
$apple = new Apple();
$orange = new Orange();

echo $apple->eat() . "<br/>";
echo  $orange->eat()."<br/>";
