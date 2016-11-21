<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * 实例化一个 Html 工厂生产 Html 类型文本
     */
    public function testCanCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\HtmlText', $text);
    }

    /**
     * 实例化不同的工厂，使用相同的方法就可以获得不同类型的文本
     */
    public function testCanCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('foobar');

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\JsonText', $text);
    }
}
