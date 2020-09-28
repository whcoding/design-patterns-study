<?php

namespace App\Factory\Simple\Impl;

use App\Factory\Simple\Contracts\ICarLogic;

class Benz implements ICarLogic
{
    public function name()
    {
       return "我是宝马";
    }
}