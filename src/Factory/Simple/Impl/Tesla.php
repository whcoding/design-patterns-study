<?php

namespace App\Factory\Simple\Impl;

use App\Factory\Simple\Contracts\ICarLogic;

class Tesla implements ICarLogic
{
    public function name()
    {
        return "我是特斯拉";
    }
}