<?php


namespace App\creational\abstractFactory;


class GourmetToppingFactory extends BaseToppingFactory
{

    public function createCheese(): Cheese
    {
        return new GoatCheese();
    }

    public function createSauce(): Sauce
    {
       return new ItalianSauce();
    }
}