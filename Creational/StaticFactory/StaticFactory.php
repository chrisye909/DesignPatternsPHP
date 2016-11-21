<?php

namespace DesignPatterns\Creational\StaticFactory;

/**
 * Note1: Remember, static means global state which is evil because it can't be mocked for tests
 * Note2: Cannot be subclassed or mock-upped or have multiple different instances.
 */
/**
 * 类似于简单工厂，目的在于实例化一组具有相同接口或者基类的对象。
 * 不同于简单工厂之处：
 * 1. 采用静态方法
 * 2. 简单工厂创建不同的对象，需要定义不同的方法，静态工厂统一调用 factory() 方法使用 $type 区分不同的对象
 *
 * 优点：通过工厂方法生产对象，避免直接实例化对象，降低耦合。
 * 缺点：增加类型需要修改工厂，不符合开闭原则。
 */
final class StaticFactory
{
    /**
     * @param string $type
     *
     * @return FormatterInterface
     */
    public static function factory(string $type): FormatterInterface
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}
