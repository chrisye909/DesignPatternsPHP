<?php

namespace DesignPatterns\Structural\Bridge\Tests;

use DesignPatterns\Structural\Bridge\HelloWorldService;
use DesignPatterns\Structural\Bridge\HtmlFormatter;
use DesignPatterns\Structural\Bridge\PlainTextFormatter;

class BridgeTest extends \PHPUnit_Framework_TestCase
{
    public function testCanPrintUsingThePlainTextPrinter()
    {
        // 真正提供服务的类不一样
        $service = new HelloWorldService(new PlainTextFormatter());
        // 调用服务的方式是一样的 $service->get()
        $this->assertEquals('Hello World', $service->get());

        // now change the implemenation and use the HtmlFormatter instead
        $service->setImplementation(new HtmlFormatter());
        $this->assertEquals('<p>Hello World</p>', $service->get());
    }
}
