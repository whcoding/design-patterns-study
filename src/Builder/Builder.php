<?php

namespace App\Builder;

// 抽象的建造者 只负责创建接口或者方法
abstract class Builder
{
    abstract public function A();
    abstract public function B();
    abstract public function C();
    abstract public function D();
}