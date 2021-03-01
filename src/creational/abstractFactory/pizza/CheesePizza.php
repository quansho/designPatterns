<?php


namespace App\creational\abstractFactory;


class CheesePizza extends Pizza
{
    public $toppingFactory;

    /**
     * CheesePizza constructor.
     * @param BaseToppingFactory $toppingFactory
     */
    public function __construct(BaseToppingFactory $toppingFactory)
    {
        $this->toppingFactory = $toppingFactory;
    }

    function addIngredients()
    {
        echo 'Подготовка ингредиентов для сырной пиццы';
        $this->toppingFactory->createCheese();
        $this->toppingFactory->createSauce();

    }
}