# Flysystem Adapter Decorator

This package provides a default adapter decorator. In most cases decorators
only influence a particular part of the interface. The `trait` provided by
this package provides the default implementation for the methods which the
decorator is not concerned with.

## Creating Decorators 

``` php
<?php

use League\Flysystem\AdapterDecorator\DecoratorTrait;
use League\Flysystem\AdapterInterface;
use League\Flysystem\Config;

class MyDecorator implements AdapterInterface
{
    use DecoratorTrait;
    
    protected $adapter;
    
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }
    
    // Required method to implement
    protected function getDecoratedAdapter()
    {
        return $this->adapter;
    }
    
    // Add your decorator methods here...
    
    public function write($path, $contents, Config $config)
    {
        $contents = funky_encryption($contents);
        
        return $this->getDecoratedAdapter()->write($path, $contents, $config);
    }
}

```

## Using Decorators 

``` php
<?php

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

$adapter = new Local($root);
$decoratedAdapter = new MyDecorator($adapter);
$filesystem = new Filesystem($decoratedAdapter);
// Use the Flysystem as you'd normally would.
```