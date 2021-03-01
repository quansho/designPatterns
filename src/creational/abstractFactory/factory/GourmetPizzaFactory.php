<?php


namespace App\creational\abstractFactory;


class GourmetPizzaFactory extends BasePizzaFactory
{

    function createPizza(string $type): Pizza
    {
        $toppingFactory = new GourmetToppingFactory();

        switch (strtolower($type))
        {
            case "cheese":
                $pizza = new CheesePizza($toppingFactory);
                break;
            case "pepperoni":
                $pizza = new PepperoniPizza($toppingFactory);
                break;
            default: throw new IllegalArgumentException("No such pizza.");
        }
        $pizza->addIngredients();
        $pizza->bakePizza();
        return $pizza;
    }
}