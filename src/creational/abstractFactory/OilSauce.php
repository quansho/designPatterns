<?php


namespace App\creational\abstractFactory;


class OilSauce implements Sauce
{
    public function gotSauce()
    {
        $this->prepareSauce();
    }

    public function prepareSauce()
    {
        // TODO: Implement prepareSauce() method.
    }
}