<?php

namespace App\Factory\Method\Impl;

use App\Factory\Method\Contracts\ICarLogic;

class Tesla implements ICarLogic
{
    public function name()
    {
        return "我是特斯拉";
    }
}