<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * In this case, the abstract factory is a contract for creating some components
 * for the web. There are two ways of rendering text: HTML and JSON
 * 抽象工厂是创建一些组件的合约。
 *
 * 使用场景：web 的响应可以是 Html 或者 Json 类型的文本，实例化不同的工厂就可以生产不同类型的响应。
 */
abstract class AbstractFactory
{
    abstract public function createText(string $content): Text;
}
