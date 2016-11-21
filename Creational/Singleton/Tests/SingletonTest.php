<?php

namespace DesignPatterns\Creational\Singleton\Tests;

use DesignPatterns\Creational\Singleton\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * 学习编写单元测试，单例的要点就是通过静态方法获取到的对象永远只能是同一个，所以这里测试两次获取到对象是否是同一个。
     * 还可以测试是否能创建、复制、反序列化对象。
     */
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Singleton', $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}
