<?php

use App\creational\factoryMethod\PizzaFactory;

require __DIR__.'/vendor/autoload.php';

//class PizzaFactoryTest {
//    public function testMakePizzas(){
//        $pizzaFactory = new PizzaFactory();
//        $cheesePizza = $pizzaFactory->createPizza("cheese");
//        $veggiePizza = $pizzaFactory->createPizza("peperoni");
//    }
//}
//
//$test = new PizzaFactoryTest();
//$test->testMakePizzas();

//class SicilianPizzaFactoryTest {
//    public function testMakePizzas(){
//        $pizzaFactory = new \App\creational\abstractFactory\SicilianPizzaFactory();
//        $cheesePizza = $pizzaFactory->createPizza("cheese");
//        $pepperoniPizza = $pizzaFactory->createPizza("pepperoni");
//    }
//}
//
//$test = new SicilianPizzaFactoryTest();
//$test->testMakePizzas();

//class GourmetPizzaFactoryTest {
//    public function testMakePizzas(){
//        $pizzaFactory = new \App\creational\abstractFactory\GourmetPizzaFactory();
//        $cheesePizza = $pizzaFactory->createPizza("cheese");
//        $pepperoniPizza = $pizzaFactory->createPizza("pepperoni");
//    }
//}
//
//$test = new GourmetPizzaFactoryTest();
//$test->testMakePizzas();

$productOne = new \App\creational\factoryMethodAlexanderShvets\ConcreteCreatorB();
$productOne->doStuff();
echo "</br>";
$productTwo = new \App\creational\factoryMethodAlexanderShvets\ConcreteCreatorA();
$productTwo->doStuff();

