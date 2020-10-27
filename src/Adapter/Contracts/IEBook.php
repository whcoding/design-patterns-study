<?php


namespace App\Adapter\Contracts;

/**
 * 电子书接口
 * Interface IEBook
 * @package App\Adapter\Contracts
 */
interface IEBook
{
    /**
     * 电子书翻页
     *
     * @return mixed
     */
    public function pressNext();

    /**
     * 打开电子书
     *
     * @return mixed
     */
    public function pressStart();
}