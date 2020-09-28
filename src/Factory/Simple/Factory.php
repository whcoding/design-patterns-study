<?php

namespace App\Factory\Simple;

use App\Factory\Simple\Impl\Audi;
use App\Factory\Simple\Impl\Benz;
use App\Factory\Simple\Impl\Tesla;

class Factory
{
    public static function GetLogic($carName)
    {
        $instance = null;
        if ($carName == '奥迪') {
           $instance = new Audi();
        } elseif ($carName == '宝马') {
            $instance = new Benz();
        } elseif ($carName == '特斯拉') {
            $instance = new Tesla();
        }
        return $instance;
    }
}