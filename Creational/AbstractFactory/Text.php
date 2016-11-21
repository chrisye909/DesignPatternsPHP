<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * 文本的抽象类
 */
abstract class Text
{
    /**
     * @var string
     */
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
