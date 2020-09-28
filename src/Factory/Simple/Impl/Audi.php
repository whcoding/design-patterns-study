<?php

namespace App\Factory\Simple\Impl;

use App\Factory\Simple\Contracts\ICarLogic;

class Audi implements ICarLogic
{
    public function name()
    {
        return "我是奥迪";
    }
}