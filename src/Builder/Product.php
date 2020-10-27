<?php


namespace App\Builder;

/**
 * 建造者模式
 * Class Product
 * @package App\Builder
 */
// 产品: 房子
class Product extends Builder
{

    public function A()
    {
        echo "建地基";
    }

    public function B()
    {
        echo "钢筋工程";
    }

    public function C()
    {
        echo "铺电线";
    }

    public function D()
    {
        echo "粉刷";
    }
}