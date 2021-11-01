<?php declare(strict_types = 1);

namespace Framework\Foundation;

use Framework\Container\Container;

class Application extends Container
{
    private String $appRoot;

    public function __construct(String $appRoot = '') 
    {
        if ($appRoot) {
            $this->appRoot = $appRoot; 
        }
    }

    public function test()
    {
        echo 'Application Initialised...';
        echo "<br />";
        $this->bind('testServiceContainer', function() {
            return 'Service Container is up!';
        });
        echo $this->resolve('testServiceContainer');
    }
}