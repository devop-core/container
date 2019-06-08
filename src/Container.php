<?php
namespace DevOp\Core;

use Psr\Container\ContainerInterface;
use DevOp\Core\Exception\NotFoundException;
use DevOp\Core\Exception\ContainerException;

class Container implements ContainerInterface
{

    /**
     * @var \ArrayObject
     */
    private $services;

    /**
     * @param int|string $id
     * @return int|string|array|object
     * @throws NotFoundException
     */
    public function get($id)
    {
        if ($this->has($id)) {
            if ($this->services[$id] instanceof \Closure) {
                return call_user_func($this->services[$id]);
            }
            return $this->services[$id];
        }
        throw new NotFoundException();
    }

    /**
     * @param int|string $id
     * @return boolean
     */
    public function has($id)
    {
        if (isset($this->services[$id])) {
            return true;
        }
        return null;
    }

    /**
     * @param int|string $id
     * @param mixed $arguments
     * @throws ContainerException
     */
    public function add($id, $arguments)
    {
        if ($this->has($id)) {
            throw new ContainerException("Service with name {$id} allready registered.");
        }

        $this->services[$id] = $arguments;
    }
}
