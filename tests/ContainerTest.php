<?php
namespace DevOp\Core\Container\Test;

use DevOp\Core\Container\Container;

class ContainerTest extends \PHPUnit_Framework_TestCase
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
        $this->setExpectedException('\DevOp\Core\Container\Exception\NotFoundException');
        $container = new Container();
        $container->get('missing');
    }
    
    public function testSetMultipleService()
    {
        $container = new Container();
        $container->add('string', 'test string');
        $this->setExpectedException('\DevOp\Core\Container\Exception\ContainerException');
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
