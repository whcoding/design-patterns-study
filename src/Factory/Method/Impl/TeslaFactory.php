<?php

namespace App\Factory\Method\Impl;

use App\Factory\Method\Contracts\ICarFactoryLogic;

class TeslaFactory implements ICarFactoryLogic
{
    public function getCar()
    {
        return new Tesla();
    }
}