<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * 工厂方法与抽象工厂类似，不同之处在于：
 * 工厂方法针对每种产品都提供一个工厂，通过不同工厂生产不同实例。增加工厂即可增加产品的类型。抽象工厂应对产品族的概念，每个工厂都要具备生产各种产品的能力，通过 $type 参数区分产品。
 */
abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    /**
     * 关键的抽象方法，将实例化延迟到子类，由具体的子类确定如何实例化
     */
    abstract protected function createVehicle(string $type): VehicleInterface;

    public function create(string $type): VehicleInterface
    {
        $obj = $this->createVehicle($type);
        $obj->setColor('black');

        return $obj;
    }
}
