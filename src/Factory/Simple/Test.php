<?php

require __DIR__.'/../../../vendor/autoload.php';

use App\Factory\Simple\Factory;
use App\Factory\Simple\Impl\Audi;
use App\Factory\Simple\Impl\Tesla;
use App\Factory\Simple\Impl\Benz;



/**
 * 工厂模式的本质:
 * 实例化对象不使用new 而是用工厂方法来代替,
 * 将选择实现类, 创建对象统一管理和控制,从而将调用者跟实现类解耦
 */


/**
 * 不使用工厂模式代码
 * 下面的代码会很臃肿
 */

//$car = new Tesla();
//$car = new Audi();
//$car = new Benz();
//echo $car->name();

/**
 * 简单工厂是工作中常用的
 * 使用了工厂模式的代码, 很简洁, 并且不需要直接去new Car的类 而是通过工厂的静态方法去实现.
 * 但是简单工厂模式也是有弊端的它违反了开闭原则, 因为每次增加一辆车的类都需要去修改工厂方法, 所以我们在使用的时候需要权衡
 */
$myCar = Factory::GetLogic('宝马');
echo $myCar->name();
