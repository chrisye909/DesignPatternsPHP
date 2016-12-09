<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * 抽象和实现解耦
 * 真正的实现类不同
 * 获取服务的方式相同
 */
class HelloWorldService extends Service
{
    public function get()
    {
        return $this->implementation->format('Hello World');
    }
}
