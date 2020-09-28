<?php

namespace App\Factory\Method\Impl;

use App\Factory\Method\Contracts\ICarLogic;

class Audi implements ICarLogic
{
    public function name()
    {
        return "我是奥迪";
    }
}