<?php


namespace App\Adapter\Impl;

use App\Adapter\Contracts\IEBook;
use App\Adapter\Contracts\IPaperBook;

/**
 * 电子书适配器类
 * Class EBookAdapter
 * @package App\Adapter
 */
class EBookAdapter implements IPaperBook
{

    protected $eBook;

    /**
     * 注意该构造函数注入了电子书接口
     * EBookAdapter constructor.
     * @param IEBook $ebook
     */
    public function __construct(IEBook $ebook)
    {
        $this->eBook = $ebook;
    }

    /**
     * 电子书将纸质书接口方法转换为电子书对应方法
     */
    public function open()
    {
        $this->eBook->pressStart();
    }

    /**
     * 纸质书翻页转化为电子书翻页
     */
    public function turnPage()
    {
        $this->eBook->pressNext();
    }
}