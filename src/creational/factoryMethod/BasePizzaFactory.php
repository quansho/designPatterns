<?php


namespace App\creational\factoryMethod;


abstract class BasePizzaFactory
{
    abstract function createPizza(string $type) : Pizza;
}