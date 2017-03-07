<?php

namespace DesignPatterns\Creational\SimpleFactory;

/**
 * 定义一个方法封装 Bicycle 类的生成。
 * 外部只需要调用简单工厂实例的方法即可产生具体的类。
 *
 * 优点：通过工厂方法获取对象，避免了直接实例化类，降低了耦合性。
 * 缺点：可实例化的类型在编译期间已经被确定，增加新类型，则需要修改工厂，不符合OCP（开闭原则）的原则。
 * 简单工厂需要知道所有要生成的类型，当子类过多或者子类层次过多时不适合使用。
 */
class SimpleFactory
{
    /**
     * 生产 Bicycle ，生产其他类需要增加对应的方法。
     */
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}
