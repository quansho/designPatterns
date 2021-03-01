<?php


namespace App\creational\factoryMethodAlexanderShvets;


use App\creational\factoryMethodAlexanderShvets\interfaces\Product;

//Конкретные продукты содержат код различных продуктов.
//Продукты будут отличаться реализацией, но интерфейс у
//них будет общий.
class ConcreteProductTwo implements Product
{

    public function doStuff()
    {
        echo "Concrete Product Two";
    }
}