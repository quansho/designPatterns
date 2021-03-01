<?php


namespace App\creational\factoryMethod;


class PizzaFactory extends BasePizzaFactory
{

    function createPizza(string $type): Pizza
    {
        switch (strtolower($type))
        {
            case "cheese":
                $pizza = new CheesePizza();
                break;
            case "peperoni":
                $pizza = new PeperoniPizza();
                break;
            default: throw new IllegalArgumentException("No such pizza.");
        }

        $pizza->addIngredients();
        $pizza->bakePizza();
        return $pizza;
    }
}