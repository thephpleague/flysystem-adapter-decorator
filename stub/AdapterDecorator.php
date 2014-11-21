<?php

namespace League\Flysystem\AdapterDecorator\Stub;

use League\Flysystem\AdapterDecorator\DecoratorTrait;
use League\Flysystem\AdapterInterface;

class AdapterDecorator
{
    use DecoratorTrait;

    /**
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * Constructor
     *
     * @param AdapterInterface $adapter
     */
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * {@inheritdoc}
     */
    protected function getDecoratedAdapter()
    {
        return $this->adapter;
    }
} 