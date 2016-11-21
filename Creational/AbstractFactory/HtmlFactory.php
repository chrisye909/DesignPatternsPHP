<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * 创建 HTML 的工厂
 */
class HtmlFactory extends AbstractFactory
{
    public function createText(string $content): Text
    {
        return new HtmlText($content);
    }
}
