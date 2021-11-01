<?php declare(strict_types = 1);

namespace Framework\Container; 

use Framework\Contracts\Container\Container as ContainerContract;

class Container implements ContainerContract
{

    private static $bindings = [];

    public function bind(string $abstract, Callable $concrete)
    {
        static::$bindings[$abstract] = $concrete;
    }

    public function resolve(string $abstract)
    {
        if (isset(static::$bindings[$abstract])) {
            return static::$bindings[$abstract]();
        }
    }

    public function containerTest()
    {
        echo 'Container Initialised...';
    }
}