<?php

namespace DesignPatterns\Creational\Singleton;

/**
 * 一个完整强壮的单例必须具备的性质
 * 1. 不可被继承
 * 2. 一个私有静态变量保存单例对象
 * 3. getInstence() 方法获取或者初始化单例对象
 * 4. 禁止外部调用生成方法
 * 5. 禁止复制
 * 6. 禁止反序列化
 */
final class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }
}
