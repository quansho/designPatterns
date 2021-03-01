<?php


namespace App\creational\factoryMethodAlexanderShvets;


use App\creational\factoryMethodAlexanderShvets\interfaces\Product;

//Конкретные создатели по-своему реализуют фабричный
//метод, производя те или иные конкретные продукты.
//Фабричный метод не обязан всё время создавать новые
//объекты. Его можно переписать так, чтобы возвращать
//существующие объекты из какого-то хранилища или кэша.
class ConcreteCreatorA extends Creator
{

    public function createProduct() : Product
    {
        return new ConcreteProductOne();
    }

}