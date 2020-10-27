<?php

use App\Prototype\BarBookPrototype;

require __DIR__.'/../../vendor/autoload.php';

$barBook = new BarBookPrototype();
$barBook->setTitle("测测");
echo $barBook->getTitle();

/**
 * 使用原型模式
 */
$cloneBarBook = clone $barBook;
echo "</br>";
echo $cloneBarBook->getTitle();