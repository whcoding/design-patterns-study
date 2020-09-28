<?php

/**
 * 工厂方法模式
 * 为了满足闭合原则, 同时不去改动之前的代码(也就是简单工厂中的静态方法)我们就可以动态的去扩展
 * 如果这样的话代码量会很多,个人觉得在工作中还是要根据实际情况来决定
 */

require __DIR__.'/../../../vendor/autoload.php';

use App\Factory\Method\Impl\AudiFactory;
use App\Factory\Method\Impl\TeslaFactory;

$audi = new AudiFactory();
$myCar = $audi->getCar();
echo $myCar->name();

$Tesla = new TeslaFactory();
$myCar2 = $Tesla->getCar();
echo $myCar2->name();
