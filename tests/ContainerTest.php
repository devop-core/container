<?php
namespace DevOp\Core\Test;

use DevOp\Core\Container;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{

    public function testSetAndGetContainer()
    {
        $container = new Container();

        $container->add('int', 3);

        $this->assertTrue($container->has('int'));
        $this->assertEquals(3, $container->get('int'));
    }

    public function testThrowException()
    {
        $this->expectException('\DevOp\Core\Exception\NotFoundException');
        $container = new Container();
        $container->get('missing');
    }

    public function testSetMultipleService()
    {
        $container = new Container();
        $container->add('string', 'test string');
        $this->expectException('\DevOp\Core\Exception\ContainerException');
        $container->add('string', 'new string');
    }

    public function testSharedObjects()
    {
        $class = new \stdClass();
        $container = new Container();
        $container->add('class', $class);
        $this->assertSame($class, $container->get('class'));
    }
}
