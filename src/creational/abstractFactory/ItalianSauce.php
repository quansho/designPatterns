<?php


namespace App\creational\abstractFactory;


class ItalianSauce implements Sauce
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