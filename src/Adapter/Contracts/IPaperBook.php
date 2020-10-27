<?php


namespace App\Adapter\Contracts;

/**
 * 纸质书接口
 * Interface IPaperBook
 * @package App\Adapter\Contracts
 */
interface IPaperBook
{
    /**
     * 翻页方法
     * @return mixed
     */
    public function turnPage();

    /**
     * 打开书方法
     * @return mixed
     */
    public function open();
}