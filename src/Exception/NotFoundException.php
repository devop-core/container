<?php
namespace DevOp\Core\Exception;

use Psr\Container\NotFoundExceptionInterface;

class NotFoundException extends \InvalidArgumentException implements NotFoundExceptionInterface
{
    
}
