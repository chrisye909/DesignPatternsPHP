<?php

namespace DesignPatterns\Structural\Adapter;

/**
 * 电子书
 */
interface EBookInterface
{
    /**
     * 解锁，对应打开书
     */
    public function unlock();

    /**
     * 与纸质书最大的不同就是电子书通常只能一页一页翻
     */
    public function pressNext();

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * 这个方法特意设计成与纸质书的不同
     *
     * @return int[]
     */
    public function getPage(): array;
}
