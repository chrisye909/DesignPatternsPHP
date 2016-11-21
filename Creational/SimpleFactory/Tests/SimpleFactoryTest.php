<?php

namespace DesignPatterns\Creational\SimpleFactory\Tests;

use DesignPatterns\Creational\SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * 使用简单工厂需要先实例化一个简单工厂，调用方法生成需要的对象。
     * @return [type] [description]
     */
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf('DesignPatterns\Creational\SimpleFactory\Bicycle', $bicycle);
    }
}