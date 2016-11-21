<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * 创建 Json 文本的工厂
 */
class JsonFactory extends AbstractFactory
{
    public function createText(string $content): Text
    {
        return new JsonText($content);
    }
}
