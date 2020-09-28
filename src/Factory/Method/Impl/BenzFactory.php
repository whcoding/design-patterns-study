<?php


namespace App\Factory\Method\Impl;

use App\Factory\Method\Contracts\ICarFactoryLogic;

class BenzFactory implements ICarFactoryLogic
{
    public function getCar()
    {
        return new Benz();
    }

}