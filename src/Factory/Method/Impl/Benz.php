<?php

namespace App\Factory\Method\Impl;

use App\Factory\Method\Contracts\ICarLogic;

class Benz implements ICarLogic
{
    public function name()
    {
       return "我是宝马";
    }
}