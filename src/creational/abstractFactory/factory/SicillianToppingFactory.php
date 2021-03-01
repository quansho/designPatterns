<?php


namespace App\creational\abstractFactory;


class SicillianToppingFactory extends BaseToppingFactory
{

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createSauce(): Sauce
    {
        return new OilSauce();
    }
}