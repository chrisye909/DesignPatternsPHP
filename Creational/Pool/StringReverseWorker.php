<?php

namespace DesignPatterns\Creational\Pool;

/**
 * Worker 类，将一个字符串反转
 */
class StringReverseWorker
{
    /**
     * @var \DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}
