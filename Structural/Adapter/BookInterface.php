<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * 纸质书的接口，与电子书不同，
 * 很形象的几个代表行为
 */
interface BookInterface
{
    /**
     * 纸质书随意翻页
     * @return [type] [description]
     */
    public function turnPage();

    /**
     * 翻开书
     * @return [type] [description]
     */
    public function open();

    /**
     * 当前页数
     * @return [type] [description]
     */
    public function getPage(): int;
}
