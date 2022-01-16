<?php

include_once("Animal.php");
//include_once "Edible.php";

class Chicken extends Animal
{
    public function makeSound()
    {
        // TODO: Implement makeSound() method.
        return "Chicken: Ò Ó O O O O O O O";
    }
    public function eat(){
        return "Có thể chiên ";
    }
}
