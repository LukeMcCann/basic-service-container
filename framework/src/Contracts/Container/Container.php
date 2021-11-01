<?php declare(strict_types = 1);

namespace Framework\Contracts\Container; 

interface Container
{
    /**
     * Bind an abstract and concrete in the container.
     * 
     * @param string $abstract - the abstract to assign
     * @param Callable $concrete - the concrete implementation
     *
     * @return void
     */
    public function bind(string $abstract, Callable $concrete);

    /**
     * Resolve an abstract to a concrete in the container.
     * 
     * @param string $abstract - the abstract to resolve
     *
     * @return void
     */
    public function resolve(string $abstract);

}