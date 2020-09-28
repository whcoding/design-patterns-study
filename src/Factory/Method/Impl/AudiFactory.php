<?php

namespace App\Factory\Method\Impl;

use App\Factory\Method\Contracts\ICarFactoryLogic;

class AudiFactory implements ICarFactoryLogic
{
    public function getCar()
    {
        return new Audi();
    }
}