<?php


namespace App\creational\abstractFactory;


abstract class Pizza
{
    abstract function addIngredients();

    public function bakePizza()
    {
        echo 'Pizza baked at 400 for 20 minutes';
    }
}