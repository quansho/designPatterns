<?php


namespace App\creational\abstractFactory;


abstract class BasePizzaFactory
{
    abstract function createPizza(string $type) : Pizza;
}