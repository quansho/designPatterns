<?php


namespace App\creational\abstractFactory;


class MozzarellaCheese implements Cheese
{
    public function gotCheese()
    {
        $this->prepareCheese();
    }

    public function prepareCheese()
    {
        // TODO: Implement prepareCheese() method.
    }
}