<?php


namespace App\creational\abstractFactory;


abstract class BaseToppingFactory
{
    abstract public function createCheese() : Cheese;
    abstract public function createSauce() : Sauce;
}