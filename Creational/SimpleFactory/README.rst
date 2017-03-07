Simple Factory
==============

Purpose
-------

SimpleFactory is a simple factory pattern.

It differs from the static factory because it is not static.
Therefore, you can have multiple factories, differently parametrized, you can subclass it and you can mock it.
It always should be preferred over a static factory!

-------
一个简单工厂模式，与静态工厂类似，唯一的区别就是不是用静态方法调用的。
简单工厂的作用是实例化对象，实例化的类具有相同的接口或者基类，在子类比较固定并不需要扩展时，可以使用简单工厂。
与静态工厂的目的一样，应该首选简单工厂。

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt SimpleFactory UML Diagram
   :align: center

Code
----

You can also find these code on `GitHub`_

SimpleFactory.php

.. literalinclude:: SimpleFactory.php
   :language: php
   :linenos:

VehicleInterface.php

.. literalinclude:: VehicleInterface.php
   :language: php
   :linenos:

Bicycle.php

.. literalinclude:: Bicycle.php
   :language: php
   :linenos:

Usage
-----

.. code-block::  php
   :linenos:

    $factory = new SimpleFactory();
    $bicycle = $factory->createBicycle();
    $bicycle->driveTo('Paris');

Test
----

Tests/SimpleFactoryTest.php

.. literalinclude:: Tests/SimpleFactoryTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/SimpleFactory
