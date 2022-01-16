<?php

include_once 'Circle.php';
include_once 'Comparable.php';

class ComparableCircle extends Circle implements Comparable
{

    public function comparale($objTwo)
    {
        if ($this->getRadius() > $objTwo->getRadius()) {
            return $objTwo->getRadius();
            return 1;
        } else if ($this->getRadius() < $objTwo->getRadius()) {
            return -1;
        } else {
            return 0;
        }
        // TODO: Implement comparale() method.
    }
}